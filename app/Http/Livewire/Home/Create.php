<?php

namespace App\Http\Livewire\Home;

use App\Models\Home;
use App\Models\Style;
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

    public Home $home;

    public function mount(Home $home)
    {
        $this->home = $home;
        $this->data = $home->toArray();

        $this->initListsForFields();
    }

    public function fields()
    {
        return [
            Arrayable::make('home.subheading', 'subheading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('home.heading', 'heading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('home.desc', 'desc')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Color::make('home.color', 'color'),
            Arrayable::make('home.meta', 'meta')->fields([
                InputArray::make('en', 'en')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('subheading', 'subheading'),
                    Input::make('link', 'link'),
                ]),
                InputArray::make('id', 'id')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('subheading', 'subheading'),
                    Input::make('link', 'link'),
                ]),
            ]),
        ];
    }

    public function updated()
    {
        $this->home->heading        = $this->data('home.heading');
        $this->home->subheading     = $this->data('home.subheading');
        $this->home->desc           = $this->data('home.desc');
        $this->home->color          = $this->data('home.color');
        $this->home->meta           = $this->data('home.meta');
    }

    public function render()
    {
        return view('livewire.home.create');
    }

    public function submit()
    {
        $this->validate();
        $this->home->save();
        $this->syncMedia($this->home->id);

        return redirect()->route('admin.homes.index');
    }

    protected function rules(): array
    {
        return [
            'home.urutan' => [
                'string',
                'required',
                'unique:homes,urutan',
            ],
            'mediaCollections.home_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.home_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'home.style_id' => [
                'integer',
                'exists:styles,id',
                'nullable',
            ],
            'home.heading.*.*' => [
                'nullable',
            ],
            'home.subheading.*.*' => [
                'nullable',
            ],
            'home.desc.*.*' => [
                'nullable',
            ],
            'home.color' => [
                'nullable',
            ],
            'home.meta.*.*' => [
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['style'] = Style::pluck('title', 'id')->toArray();
    }
}
