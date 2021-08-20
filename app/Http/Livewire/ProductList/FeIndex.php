<?php

namespace App\Http\Livewire\ProductList;

use App\Models\ProductList;
use Livewire\Component;

class FeIndex extends Component
{
    public ProductList $item;

    public function render()
    {
        $seo        = [
            'title'         => 'Briquette gates — ' . $this->item->heading[0][lang()],
            'description'   => $this->item->desc[0][lang()],
            'image'         => $this->item->image->first()['preview_thumbnail'],
        ];
        return view('livewire.product-list.fe-index')->layout('layouts.html', ['seo' => $seo]);
    }
}
