<?php

namespace App\Http\Livewire\ProductList;

use App\Models\ProductList;
use App\Models\Style;
use App\Traits\WithUploadsMedia;
use App\Traits\WithValidation;

use App\View\Components\Form\Arrayable;
use App\View\Components\Form\Color;
use App\View\Components\Form\Input;
use App\View\Components\Form\InputArray;
use App\View\Components\Form\Textarea;
use App\View\Components\Form\FormComponent;
use App\View\Components\Form\Select;

class Create extends FormComponent
{
    use WithValidation, WithUploadsMedia;

    public ProductList $productList;

    public function mount(ProductList $productList)
    {
        $this->productList = $productList;
        $this->data = $productList->toArray();

        $this->initListsForFields();
    }

    public function fields()
    {
        return [
            Arrayable::make('productList.subheading', 'subheading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('productList.heading', 'heading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('productList.desc', 'desc')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Color::make('productList.color', 'color'),
            Arrayable::make('productList.meta', 'meta')->fields([
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
            Arrayable::make('productList.s_2_heading', 's_2_heading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('productList.s_2_desc', 's_2_desc')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('productList.s_2_meta', 's_2_meta')->fields([
                Color::make('color', 'color'),
                Input::make('icon', 'icon'),
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
        $this->productList->heading         = $this->data('productList.heading');
        $this->productList->subheading      = $this->data('productList.subheading');
        $this->productList->desc            = $this->data('productList.desc');
        $this->productList->color           = $this->data('productList.color');
        $this->productList->meta            = $this->data('productList.meta');
        $this->productList->s_2_heading     = $this->data('productList.s_2_heading');
        $this->productList->s_2_desc        = $this->data('productList.s_2_desc');
        $this->productList->s_2_meta        = $this->data('productList.s_2_meta');
    }

    public function render()
    {
        return view('livewire.product-list.create');
    }

    public function submit()
    {
        $this->validate();

        $this->productList->save();
        $this->syncMedia($this->productList->id);

        return redirect()->route('admin.product-lists.index');
    }

    protected function rules(): array
    {
        return [
            'productList.slug' => [
                'string',
                'required',
                'unique:product_lists,slug',
            ],
            'mediaCollections.product_list_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.product_list_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'mediaCollections.product_list_imageproduct' => [
                'array',
                'nullable',
            ],
            'mediaCollections.product_list_imageproduct.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'productList.style_id' => [
                'integer',
                'exists:styles,id',
                'nullable',
            ],
            'productList.heading.*.*' => [
                'nullable',
            ],
            'productList.subheading.*.*' => [
                'nullable',
            ],
            'productList.desc.*.*' => [
                'nullable',
            ],
            'productList.color' => [
                'nullable',
            ],
            'productList.meta.*.*' => [
                'nullable',
            ],
            'productList.s_2_heading.*.*' => [
                'nullable',
            ],
            'productList.s_2_desc.*.*' => [
                'nullable',
            ],
            'productList.s_2_meta.*.*' => [
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['style'] = Style::pluck('title', 'id')->toArray();
    }
}
