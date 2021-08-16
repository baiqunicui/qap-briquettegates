<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        return view('livewire.product.fe-index')->layout('layouts.html');
    }
}
