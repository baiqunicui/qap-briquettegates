<?php

namespace App\Http\Livewire\About;

use App\Models\About;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = About::get()->sortBy('urutan');
        $seo        = [
            'title'         => 'Briquette gates — ' . $collection[0]['heading'][0][lang()],
            'description'   => $collection[0]['desc'][0][lang()],
            'image'         => $collection[0]->image->first()['preview_thumbnail'],
        ];
        return view('livewire.about.fe-index', compact('collection'))->layout('layouts.html', ['seo' => $seo]);
    }
}
