<?php

namespace App\Http\Livewire\Footer;

use App\Models\Footer;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Footer::get()->sortBy('urutan');
        return view('livewire.footer.fe-index', compact('collection'))->layout('layouts.html');
    }
}
