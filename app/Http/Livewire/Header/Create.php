<?php

namespace App\Http\Livewire\Header;

use App\Models\Header;
use App\Traits\WithUploadsMedia;
use App\Traits\WithValidation;

use App\View\Components\Form\Arrayable;
use App\View\Components\Form\Color;
use App\View\Components\Form\Input;
use App\View\Components\Form\InputArray;
use App\View\Components\Form\Textarea;
use App\View\Components\Form\FormComponent;

class Create extends FormComponent
{
    use WithValidation, WithUploadsMedia;

    public Header $header;

    public function mount(Header $header)
    {
        $this->header = $header;
        $this->data = $header->toArray();
    }

    public function fields()
    {
        return [
            Arrayable::make('header.menu', 'menu')->fields([
                InputArray::make('en', 'en')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('link', 'link'),
                ]),
                InputArray::make('id', 'id')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('link', 'link'),
                ]),
            ]),
            Arrayable::make('header.lang', 'lang')->fields([
                InputArray::make('en', 'en')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('link', 'link'),
                ]),
                InputArray::make('id', 'id')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('link', 'link'),
                ]),
            ]),
            Arrayable::make('header.button', 'button')->fields([
                Input::make('en', 'en'),
                Input::make('id', 'id'),
                Color::make('color', 'color'),
                Input::make('link', 'link'),
            ]),
        ];
    }

    public function updated()
    {
        $this->header->menu     = $this->data('header.menu');
        $this->header->lang     = $this->data('header.lang');
        $this->header->button   = $this->data('header.button');
    }

    public function render()
    {
        return view('livewire.header.create');
    }

    public function submit()
    {
        $this->validate();

        $this->header->save();
        $this->syncMedia($this->header->id);

        return redirect()->route('admin.headers.index');
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.header_logo' => [
                'array',
                'nullable',
            ],
            'mediaCollections.header_logo.*.id' => [
                'integer',
                'exists:media,id',
            ],

            'header.menu.*.*' => [
                'nullable',
            ],
            'header.lang.*.*' => [
                'nullable',
            ],
            'header.button.*.*' => [
                'nullable',
            ],
        ];
    }
}
