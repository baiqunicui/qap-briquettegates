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

class Edit extends FormComponent
{
    use WithValidation, WithUploadsMedia;

    public About $about;

    public function mount(About $about)
    {
        $this->about = $about;
        $this->data = $about->toArray();

        $this->initListsForFields();
        $this->mediaCollections = [
            'about_image' => $about->image,
        ];
    }

    public function fields()
    {
        return [
            Arrayable::make('subheading', 'subheading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('heading', 'heading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('desc', 'desc')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Color::make('color', 'color'),
            Arrayable::make('meta', 'meta')->fields([
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

    public function render()
    {
        return view('livewire.about.edit');
    }

    public function submit()
    {
        $this->validation();
        About::find($this->about->id)->update([
            'heading'           => $this->data['heading'],
            'subheading'        => $this->data['subheading'],
            'desc'              => $this->data['desc'],
            'color'             => $this->data['color'],
            'meta'              => $this->data['meta'],
        ]);
        $this->about->save();
        $this->syncMedia($this->about->id);

        return redirect()->route('admin.abouts.index');
    }

    protected function rules(): array
    {
        return [
            'about.urutan' => [
                'string',
                'unique:abouts,urutan,' . $this->about->id,
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
