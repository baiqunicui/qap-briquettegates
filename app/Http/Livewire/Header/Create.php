<?php

namespace App\Http\Livewire\Header;

use App\Models\Header;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Header $header;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function mount(Header $header)
    {
        $this->header = $header;
    }

    public function render()
    {
        return view('livewire.header.create');
    }

    public function submit()
    {
        $this->validate();

        $this->header->save();
        $this->syncMedia();

        return redirect()->route('admin.headers.index');
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
            'mediaCollections.header_logo' => [
                'array',
                'nullable',
            ],
            'mediaCollections.header_logo.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'header.menu' => [
                'string',
                'nullable',
            ],
            'header.lang' => [
                'string',
                'nullable',
            ],
            'header.button' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->header->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
