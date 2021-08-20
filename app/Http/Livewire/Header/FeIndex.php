<?php

namespace App\Http\Livewire\Header;

use App\Models\Header;
use App\Models\ProductList;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Header::first();
        $product    = ProductList::get(['slug', 'heading'])->toArray();
        // dd($collection->button);
        return view('livewire.header.fe-index', compact('collection', 'product'))->layout('layouts.html');
    }
}
