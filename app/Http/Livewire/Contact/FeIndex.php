<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Contact::get()->sortBy('urutan');
        return view('livewire.contact.fe-index', compact('collection'))->layout('layouts.html');
    }
}
