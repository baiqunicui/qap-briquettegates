<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        return view('livewire.contact.fe-index')->layout('layouts.html');
    }
}
