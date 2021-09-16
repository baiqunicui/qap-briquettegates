<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Product::get()->sortBy('urutan');
        $seo        = [
            'title'         => 'Briquette gates — ' . $collection[0]['heading'][0][lang()] ?? '',
            'description'   => $collection[0]['desc'][0][lang()] ?? '',
            'image'         => $collection[0]->image->first()['preview_thumbnail'] ?? '',
        ];
        return view('livewire.product.fe-index', compact('collection'))->layout('layouts.html', ['seo' => $seo]);
    }
}
