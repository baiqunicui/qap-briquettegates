<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class View extends Component
{
    public $props = [];

    public static function make($name, $data = [])
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'data' => $data,
        ];

        return $component;
    }

    public function render()
    {
        return view('components.form.view');
    }
}
