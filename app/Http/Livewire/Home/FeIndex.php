<?php

namespace App\Http\Livewire\Home;

use App\Models\Home;
use Livewire\Component;

class FeIndex extends Component
{
    public function render()
    {
        $collection = Home::get()->sortBy('urutan');
        $seo        = [
            'title'         => 'Briquette gates — ' . $collection[0]['heading'][0][lang()],
            'description'   => $collection[1]['desc'][0][lang()],
            'image'         => $collection[0]->image->first()['preview_thumbnail'],
        ];
        return view('livewire.home.fe-index', compact('collection'))->layout('layouts.html', ['seo' => $seo]);
    }
}
