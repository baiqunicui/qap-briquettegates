<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Contact::get()->sortBy('urutan');
        $seo        = [
            'title'         => 'Briquette gates — contact',
            'description'   => $collection[0]['heading'][0][lang()],
            'image'         => $collection[0]->image->first()['preview_thumbnail'],
        ];
        return view('livewire.contact.fe-index', compact('collection'))->layout('layouts.html', ['seo' => $seo]);
    }
}
