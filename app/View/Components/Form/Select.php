<?php

namespace App\View\Components\Form;

use App\Traits\WithDisabled;
use App\Traits\WithHelp;
use App\Traits\WithModel;
use App\Traits\WithOptions;
use App\Traits\WithPrefix;
use App\Traits\WithSizing;
use Illuminate\View\Component;

class Select extends Component
{
    use WithPrefix, WithOptions, WithSizing, WithHelp, WithModel, WithDisabled;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'placeholder' => null,
            'options' => [],
            'small' => false,
            'large' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'disabled' => false,
        ];

        return $component;
    }

    public function placeholder($placeholder)
    {
        $this->props['placeholder'] = $placeholder;

        return $this;
    }

    public function render()
    {
        return view('components.form.select');
    }
}
