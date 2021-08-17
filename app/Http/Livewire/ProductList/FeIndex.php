<?php

namespace App\Http\Livewire\ProductList;

use App\Models\ProductList;
use Livewire\Component;

class FeIndex extends Component
{
    public ProductList $item;

    public function render()
    {
        return view('livewire.product-list.fe-index')->layout('layouts.html');
    }
}
