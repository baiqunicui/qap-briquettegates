<?php

namespace App\Http\Livewire\Home;

use App\Models\Home;
use App\Models\Style;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Home $home;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Home $home)
    {
        $this->home = $home;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.home.create');
    }

    public function submit()
    {
        $this->validate();

        $this->home->save();
        $this->syncMedia();

        return redirect()->route('admin.homes.index');
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
            'home.urutan' => [
                'string',
                'required',
                'unique:homes,urutan',
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
            'home.heading' => [
                'string',
                'nullable',
            ],
            'home.subheading' => [
                'string',
                'nullable',
            ],
            'home.desc' => [
                'string',
                'nullable',
            ],
            'home.color' => [
                'string',
                'nullable',
            ],
            'home.meta' => [
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
            ->update(['model_id' => $this->home->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
