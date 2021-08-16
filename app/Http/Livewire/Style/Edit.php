<?php

namespace App\Http\Livewire\Style;

use App\Models\Style;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Style $style;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function mount(Style $style)
    {
        $this->style            = $style;
        $this->mediaCollections = [
            'style_image' => $style->image,
        ];
    }

    public function render()
    {
        return view('livewire.style.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->style->save();
        $this->syncMedia();

        return redirect()->route('admin.styles.index');
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

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    protected function rules(): array
    {
        return [
            'style.title' => [
                'string',
                'nullable',
            ],
            'style.meta' => [
                'string',
                'nullable',
            ],
            'mediaCollections.style_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.style_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->style->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
