<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class DynamicComponent extends Component
{
    public $props = [];
    public $attrs = [];

    public static function make($name, $attrs = [])
    {
        $component = new static;

        $component->props = [
            'name' => $name,
        ];

        $component->attrs = $attrs;

        return $component;
    }

    public function render()
    {
        return view('components.form.dynamic-component');
    }
}
