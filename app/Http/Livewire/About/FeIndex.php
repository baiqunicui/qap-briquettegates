<?php

namespace App\Http\Livewire\About;

use App\Models\About;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = About::get()->sortBy('urutan');
        return view('livewire.about.fe-index', compact('collection'))->layout('layouts.html');
    }
}
