<?php

namespace App\Http\Livewire\ProductList;

use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        return view('livewire.product-list.fe-index')->layout('layouts.html');
    }
}
