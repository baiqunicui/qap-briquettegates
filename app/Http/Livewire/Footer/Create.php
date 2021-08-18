<?php

namespace App\Http\Livewire\Footer;

use App\Models\Footer;
use App\Models\Style;
use App\Models\Upload;
use App\Traits\WithUploadsMedia;
use App\Traits\WithValidation;

use App\View\Components\Form\Arrayable;
use App\View\Components\Form\Color;
use App\View\Components\Form\Input;
use App\View\Components\Form\InputArray;
use App\View\Components\Form\Textarea;
use App\View\Components\Form\FormComponent;
use App\View\Components\Form\Select;

class Create extends FormComponent
{
    use WithValidation, WithUploadsMedia;

    public Footer $footer;

    public function mount(Footer $footer)
    {
        $this->footer = $footer;
        $this->data = $footer->toArray();

        $this->initListsForFields();
    }

    public function fields()
    {
        return [
            Arrayable::make('footer.subheading', 'subheading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('footer.heading', 'heading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('footer.desc', 'desc')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Color::make('footer.color', 'color'),
            Arrayable::make('footer.meta', 'meta')->fields([
                Select::make('icon', 'icon')->options(Upload::pluck('title', 'id')->toArray()),
                Color::make('color', 'color'),
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
        $this->footer->heading        = $this->data('footer.heading');
        $this->footer->subheading     = $this->data('footer.subheading');
        $this->footer->desc           = $this->data('footer.desc');
        $this->footer->color          = $this->data('footer.color');
        $this->footer->meta           = $this->data('footer.meta');
    }

    public function render()
    {
        return view('livewire.footer.create');
    }

    public function submit()
    {
        $this->validate();

        $this->footer->save();
        $this->syncMedia($this->footer->id);

        return redirect()->route('admin.footers.index');
    }

    protected function rules(): array
    {
        return [
            'footer.urutan' => [
                'string',
                'required',
                'unique:footers,urutan',
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
