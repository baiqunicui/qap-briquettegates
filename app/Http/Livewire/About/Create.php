<?php

namespace App\Http\Livewire\About;

use App\Models\About;
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

    public About $about;

    public function mount(About $about)
    {
        $this->about = $about;
        $this->data = $about->toArray();

        $this->initListsForFields();
    }

    public function fields()
    {
        return [
            Arrayable::make('about.subheading', 'subheading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('about.heading', 'heading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('about.desc', 'desc')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Color::make('about.color', 'color'),
            Arrayable::make('about.meta', 'meta')->fields([
                InputArray::make('en', 'en')->fields([
                    Input::make('heading', 'heading'),
                    Textarea::make('desc', 'desc'),
                    Input::make('subheading', 'subheading'),
                    Input::make('link', 'link'),
                ]),
                InputArray::make('id', 'id')->fields([
                    Input::make('heading', 'heading'),
                    Textarea::make('desc', 'desc'),
                    Input::make('subheading', 'subheading'),
                    Input::make('link', 'link'),
                ]),
            ]),
        ];
    }

    public function updated()
    {
        $this->about->heading        = $this->data('about.heading');
        $this->about->subheading     = $this->data('about.subheading');
        $this->about->desc           = $this->data('about.desc');
        $this->about->color          = $this->data('about.color');
        $this->about->meta           = $this->data('about.meta');
    }

    public function render()
    {
        return view('livewire.about.create');
    }

    public function submit()
    {
        $this->validate();

        $this->about->save();
        $this->syncMedia($this->about->id);

        return redirect()->route('admin.abouts.index');
    }

    protected function rules(): array
    {
        return [
            'about.urutan' => [
                'string',
                'required',
                'unique:abouts,urutan',
            ],
            'mediaCollections.about_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.about_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'about.style_id' => [
                'integer',
                'exists:styles,id',
                'nullable',
            ],
            'about.heading.*.*' => [
                'nullable',
            ],
            'about.subheading.*.*' => [
                'nullable',
            ],
            'about.desc.*.*' => [
                'nullable',
            ],
            'about.color' => [
                'nullable',
            ],
            'about.meta.*.*' => [
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['style'] = Style::pluck('title', 'id')->toArray();
    }
}
