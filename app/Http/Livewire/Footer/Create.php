<?php

namespace App\Http\Livewire\Footer;

use App\Models\Footer;
use App\Models\Style;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Footer $footer;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Footer $footer)
    {
        $this->footer = $footer;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.footer.create');
    }

    public function submit()
    {
        $this->validate();

        $this->footer->save();
        $this->syncMedia();

        return redirect()->route('admin.footers.index');
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
            'footer.heading' => [
                'string',
                'nullable',
            ],
            'footer.subheading' => [
                'string',
                'nullable',
            ],
            'footer.desc' => [
                'string',
                'nullable',
            ],
            'footer.color' => [
                'string',
                'nullable',
            ],
            'footer.meta' => [
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
            ->update(['model_id' => $this->footer->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
