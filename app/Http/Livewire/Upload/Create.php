<?php

namespace App\Http\Livewire\Upload;

use App\Models\Upload;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Upload $upload;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Upload $upload)
    {
        $this->upload       = $upload;
        $this->upload->type = 'image';
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.upload.create');
    }

    public function submit()
    {
        $this->validate();

        $this->upload->save();
        $this->syncMedia();

        return redirect()->route('admin.uploads.index');
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
            'upload.type' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['type'])),
            ],
            'upload.title' => [
                'string',
                'nullable',
            ],
            'mediaCollections.upload_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.upload_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'mediaCollections.upload_file' => [
                'array',
                'nullable',
            ],
            'mediaCollections.upload_file.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['type'] = $this->upload::TYPE_SELECT;
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->upload->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
