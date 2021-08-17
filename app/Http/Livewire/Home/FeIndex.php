<?php

namespace App\Http\Livewire\Home;

use App\Models\Home;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Home::get()->sortBy('urutan');
        return view('livewire.home.fe-index', compact('collection'))->layout('layouts.html');
    }
}
