<?php

namespace App\Http\Livewire\Footer;

use App\Models\Footer;
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

    public Footer $footer;

    public function mount(Footer $footer)
    {
        $this->footer = $footer;
        $this->data = $footer->toArray();

        $this->initListsForFields();
        $this->mediaCollections = [
            'footer_image' => $footer->image,
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
        return view('livewire.footer.edit');
    }

    public function submit()
    {
        $this->validation();
        Footer::find($this->footer->id)->update([
            'heading'           => $this->data['heading'],
            'subheading'        => $this->data['subheading'],
            'desc'              => $this->data['desc'],
            'color'             => $this->data['color'],
            'meta'              => $this->data['meta'],
        ]);
        $this->footer->save();
        $this->syncMedia($this->footer->id);

        return redirect()->route('admin.footers.index');
    }

    protected function rules(): array
    {
        return [
            'footer.urutan' => [
                'string',
                'unique:footers,urutan,' . $this->footer->id,
            ],
            'mediaCollections.footer_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.footer_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'footer.style_id' => [
                'integer',
                'exists:styles,id',
                'nullable',
            ],
            'footer.heading.*.*' => [
                'nullable',
            ],
            'footer.subheading.*.*' => [
                'nullable',
            ],
            'footer.desc.*.*' => [
                'nullable',
            ],
            'footer.color' => [
                'nullable',
            ],
            'footer.meta.*.*' => [
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['style'] = Style::pluck('title', 'id')->toArray();
    }
}
