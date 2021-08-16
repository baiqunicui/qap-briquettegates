<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        return view('livewire.home.fe-index')->layout('layouts.html');
    }
}
