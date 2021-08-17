<?php

namespace App\Http\Livewire\Header;

use App\Models\Header;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Header::first();
        return view('livewire.header.fe-index', compact('collection'))->layout('layouts.html');
    }
}
