<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\Style;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Product $product;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->initListsForFields();
        $this->mediaCollections = [
            'product_image' => $product->image,
        ];
    }

    public function render()
    {
        return view('livewire.product.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->product->save();
        $this->syncMedia();

        return redirect()->route('admin.products.index');
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
            'product.urutan' => [
                'string',
                'required',
                'unique:products,urutan,' . $this->product->id,
            ],
            'mediaCollections.product_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.product_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'product.style_id' => [
                'integer',
                'exists:styles,id',
                'nullable',
            ],
            'product.heading' => [
                'string',
                'nullable',
            ],
            'product.subheading' => [
                'string',
                'nullable',
            ],
            'product.desc' => [
                'string',
                'nullable',
            ],
            'product.color' => [
                'string',
                'nullable',
            ],
            'product.meta' => [
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
            ->update(['model_id' => $this->product->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
