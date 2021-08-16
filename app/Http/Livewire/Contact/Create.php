<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use App\Models\Style;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Contact $contact;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.contact.create');
    }

    public function submit()
    {
        $this->validate();

        $this->contact->save();
        $this->syncMedia();

        return redirect()->route('admin.contacts.index');
    }

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    protected function rules(): array
    {
        return [
            'contact.urutan' => [
                'string',
                'required',
                'unique:contacts,urutan',
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
            'contact.heading' => [
                'string',
                'nullable',
            ],
            'contact.subheading' => [
                'string',
                'nullable',
            ],
            'contact.desc' => [
                'string',
                'nullable',
            ],
            'contact.color' => [
                'string',
                'nullable',
            ],
            'contact.meta' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['style'] = Style::pluck('title', 'id')->toArray();
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->contact->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
