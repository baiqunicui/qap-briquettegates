<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\Style;
use App\Models\Upload;
use App\Traits\WithUploadsMedia;
use App\Traits\WithValidation;

use App\View\Components\Form\Arrayable;
use App\View\Components\Form\Color;
use App\View\Components\Form\Input;
use App\View\Components\Form\InputArray;
use App\View\Components\Form\Textarea;
use App\View\Components\Form\FormComponent;
use App\View\Components\Form\Select;

class Edit extends FormComponent
{
    use WithValidation, WithUploadsMedia;

    public Product $product;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->data = $product->toArray();
        $this->initListsForFields();
        $this->mediaCollections = [
            'product_image' => $product->image,
        ];
    }

    public function fields()
    {
        return [
            Arrayable::make('subheading', 'subheading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('heading', 'heading')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Arrayable::make('desc', 'desc')->fields([
                Textarea::make('en', 'en'),
                Textarea::make('id', 'id'),
            ]),
            Color::make('color', 'color'),
            Arrayable::make('meta', 'meta')->fields([
                Select::make('foto', 'foto')->options(Upload::pluck('title', 'id')->toArray()),
                Input::make('nama', 'nama'),
                Input::make('jabatan', 'jabatan'),
                Input::make('linkedin', 'linkedin'),
                Input::make('instagram', 'instagram'),
            ]),
        ];
    }

    public function render()
    {
        return view('livewire.product.edit');
    }

    public function submit()
    {
        $this->validation();
        Product::find($this->product->id)->update([
            'heading'           => $this->data['heading'],
            'subheading'        => $this->data['subheading'],
            'desc'              => $this->data['desc'],
            'color'             => $this->data['color'],
            'meta'              => $this->data['meta'],
        ]);
        $this->product->save();
        $this->syncMedia($this->product->id);

        return redirect()->route('admin.products.index');
    }

    protected function rules(): array
    {
        return [
            'product.urutan' => [
                'string',
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
