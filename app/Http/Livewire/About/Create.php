<?php

namespace App\Http\Livewire\About;

use App\Models\About;
use App\Models\Style;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public About $about;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(About $about)
    {
        $this->about = $about;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.about.create');
    }

    public function submit()
    {
        $this->validate();

        $this->about->save();
        $this->syncMedia();

        return redirect()->route('admin.abouts.index');
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
            'about.urutan' => [
                'string',
                'required',
                'unique:abouts,urutan',
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
            'about.heading' => [
                'string',
                'nullable',
            ],
            'about.subheading' => [
                'string',
                'nullable',
            ],
            'about.desc' => [
                'string',
                'nullable',
            ],
            'about.color' => [
                'string',
                'nullable',
            ],
            'about.meta' => [
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
            ->update(['model_id' => $this->about->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
