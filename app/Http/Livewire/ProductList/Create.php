<?php

namespace App\Http\Livewire\ProductList;

use App\Models\ProductList;
use App\Models\Style;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public ProductList $productList;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(ProductList $productList)
    {
        $this->productList = $productList;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.product-list.create');
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

    protected function rules(): array
    {
        return [
            'productList.slug' => [
                'string',
                'nullable',
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
            'mediaCollections.product_list_imageproduct' => [
                'array',
                'nullable',
            ],
            'mediaCollections.product_list_imageproduct.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'productList.s_2_heading' => [
                'string',
                'nullable',
            ],
            'productList.s_2_desc' => [
                'string',
                'nullable',
            ],
            'productList.s_2_meta' => [
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
