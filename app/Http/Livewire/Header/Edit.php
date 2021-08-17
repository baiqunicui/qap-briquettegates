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

class Edit extends FormComponent
{
    use WithValidation, WithUploadsMedia;

    public Header $header;

    public function mount(Header $header)
    {
        $this->header = $header;
        $this->data = $header->toArray();

        $this->mediaCollections = [
            'header_logo' => $header->logo,
        ];
    }


    public function fields()
    {
        return [
            Arrayable::make('menu', 'menu')->fields([
                InputArray::make('en', 'en')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('link', 'link'),
                ]),
                InputArray::make('id', 'id')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('link', 'link'),
                ]),
            ]),
            Arrayable::make('lang', 'lang')->fields([
                InputArray::make('en', 'en')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('link', 'link'),
                ]),
                InputArray::make('id', 'id')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('link', 'link'),
                ]),
            ]),
            Arrayable::make('button', 'button')->fields([
                Input::make('en', 'en'),
                Input::make('id', 'id'),
                Color::make('color', 'color'),
                Input::make('link', 'link'),
            ]),
        ];
    }

    public function render()
    {
        return view('livewire.header.edit');
    }

    public function submit()
    {
        $this->validation();
        Header::find($this->header->id)->update([
            'menu' => $this->data['menu'],
            'lang' => $this->data['lang'],
            'button' => $this->data['button'],
        ]);
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
