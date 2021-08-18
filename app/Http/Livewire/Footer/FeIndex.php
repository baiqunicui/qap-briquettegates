<?php

namespace App\Http\Livewire\Footer;

use App\Models\Footer;
use App\Models\Upload;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Footer::get()->sortBy('urutan');
        $upload = Upload::get();
        return view('livewire.footer.fe-index', compact('collection', 'upload'))->layout('layouts.html');
    }
}
