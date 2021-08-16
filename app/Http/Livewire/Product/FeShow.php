<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class FeShow extends Component
{
    public function render()
    {
        return view('livewire.product.fe-show')->layout('layouts.html');
    }
}
