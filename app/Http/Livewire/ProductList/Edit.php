<?php

namespace App\Http\Livewire\ProductList;

use App\Models\ProductList;
use App\Models\Style;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public ProductList $productList;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(ProductList $productList)
    {
        $this->productList = $productList;
        $this->initListsForFields();
        $this->mediaCollections = [
            'product_list_image' => $productList->image,
        ];
    }

    public function render()
    {
        return view('livewire.product-list.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->productList->save();
        $this->syncMedia();

        return redirect()->route('admin.product-lists.index');
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
            'productList.urutan' => [
                'string',
                'required',
                'unique:product_lists,urutan,' . $this->productList->id,
            ],
            'mediaCollections.product_list_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.product_list_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'productList.style_id' => [
                'integer',
                'exists:styles,id',
                'nullable',
            ],
            'productList.heading' => [
                'string',
                'nullable',
            ],
            'productList.subheading' => [
                'string',
                'nullable',
            ],
            'productList.desc' => [
                'string',
                'nullable',
            ],
            'productList.color' => [
                'string',
                'nullable',
            ],
            'productList.meta' => [
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
            ->update(['model_id' => $this->productList->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
