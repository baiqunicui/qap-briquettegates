<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
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

    public Contact $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
        $this->data = $contact->toArray();

        $this->initListsForFields();
        $this->mediaCollections = [
            'contact_image' => $contact->image,
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
        return view('livewire.contact.edit');
    }

    public function submit()
    {
        $this->validation();
        Contact::find($this->contact->id)->update([
            'heading'           => $this->data['heading'],
            'subheading'        => $this->data['subheading'],
            'desc'              => $this->data['desc'],
            'color'             => $this->data['color'],
            'meta'              => $this->data['meta'],
        ]);
        $this->contact->save();
        $this->syncMedia($this->contact->id);

        return redirect()->route('admin.contacts.index');
    }

    protected function rules(): array
    {
        return [
            'contact.urutan' => [
                'string',
                'unique:contacts,urutan,' . $this->contact->id,
            ],
            'mediaCollections.contact_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.contact_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'contact.style_id' => [
                'integer',
                'exists:styles,id',
                'nullable',
            ],
            'contact.heading.*.*' => [
                'nullable',
            ],
            'contact.subheading.*.*' => [
                'nullable',
            ],
            'contact.desc.*.*' => [
                'nullable',
            ],
            'contact.color.*.*' => [
                'nullable',
            ],
            'contact.meta.*.*' => [
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['style'] = Style::pluck('title', 'id')->toArray();
    }
}
