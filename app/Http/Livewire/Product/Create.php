<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\Style;
use App\Traits\WithUploadsMedia;
use App\Traits\WithValidation;

use App\View\Components\Form\Arrayable;
use App\View\Components\Form\Color;
use App\View\Components\Form\Input;
use App\View\Components\Form\InputArray;
use App\View\Components\Form\Textarea;
use App\View\Components\Form\FormComponent;

class Create extends FormComponent
{
    use WithValidation, WithUploadsMedia;

    public Product $product;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->data = $product->toArray();

        $this->initListsForFields();
    }

    public function fields()
    {
        return [
            Arrayable::make('product.subheading', 'subheading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('product.heading', 'heading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('product.desc', 'desc')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Color::make('product.color', 'color'),
            Arrayable::make('product.meta', 'meta')->fields([
                InputArray::make('en', 'en')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('subheading', 'subheading'),
                    Input::make('link', 'link'),
                ]),
                InputArray::make('id', 'id')->fields([
                    Input::make('heading', 'heading'),
                    Input::make('subheading', 'subheading'),
                    Input::make('link', 'link'),
                ]),
            ]),
        ];
    }

    public function updated()
    {
        $this->product->heading        = $this->data('product.heading');
        $this->product->subheading     = $this->data('product.subheading');
        $this->product->desc           = $this->data('product.desc');
        $this->product->color          = $this->data('product.color');
        $this->product->meta           = $this->data('product.meta');
    }

    public function render()
    {
        return view('livewire.product.create');
    }

    public function submit()
    {
        $this->validate();

        $this->product->save();
        $this->syncMedia($this->product->id);

        return redirect()->route('admin.products.index');
    }

    protected function rules(): array
    {
        return [
            'product.urutan' => [
                'string',
                'required',
                'unique:products,urutan',
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
            'product.heading.*.*' => [
                'nullable',
            ],
            'product.subheading.*.*' => [
                'nullable',
            ],
            'product.desc.*.*' => [
                'nullable',
            ],
            'product.color.*.*' => [
                'nullable',
            ],
            'product.meta.*.*' => [
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['style'] = Style::pluck('title', 'id')->toArray();
    }
}
