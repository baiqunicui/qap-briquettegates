<?php

namespace App\View\Components\Form;

use App\Traits\WithDisabled;
use App\Traits\WithHelp;
use App\Traits\WithModel;
use App\Traits\WithPrefix;
use App\Traits\WithReadonly;
use App\Traits\WithSizing;
use Illuminate\View\Component;

class Color extends Component
{
    use WithPrefix, WithSizing, WithHelp, WithModel, WithDisabled, WithReadonly;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'small' => false,
            'large' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'color',
            'disabled' => false,
            'readonly' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('components.form.color');
    }
}
