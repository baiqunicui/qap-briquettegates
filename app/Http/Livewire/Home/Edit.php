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

class Edit extends FormComponent
{
    use WithValidation, WithUploadsMedia;

    public Home $home;

    public function mount(Home $home)
    {
        $this->home = $home;
        $this->data = $home->toArray();
        $this->initListsForFields();

        $this->mediaCollections = [
            'home_image' => $home->image,
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

    public function render()
    {
        return view('livewire.home.edit');
    }

    public function submit()
    {
        $this->validation();
        Home::find($this->home->id)->update([
            'heading'           => $this->data['heading'],
            'subheading'        => $this->data['subheading'],
            'desc'              => $this->data['desc'],
            'color'             => $this->data['color'],
            'meta'              => $this->data['meta'],
        ]);
        $this->home->save();
        $this->syncMedia($this->home->id);

        return redirect()->route('admin.homes.index');
    }

    protected function rules(): array
    {
        return [
            'home.urutan' => [
                'string',
                'unique:homes,urutan,' . $this->home->id,
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
