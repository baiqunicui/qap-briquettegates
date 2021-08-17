<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Product::get()->sortBy('urutan');
        return view('livewire.product.fe-index', compact('collection'))->layout('layouts.html');
    }
}
