<?php

namespace App\View\Components\Form;

use App\Traits\WithDisabled;
use App\Traits\WithHelp;
use App\Traits\WithPrefix;
use Illuminate\View\Component;

class InputArray extends Component
{
    use WithPrefix, WithHelp, WithDisabled;

    public $props = [];
    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'fields' => [],
            'help' => null,
        ];

        $component->attrs = [
            'disabled' => false,
        ];

        return $component;
    }

    public function fields($fields = [])
    {
        $this->props['fields'] = $fields;

        return $this;
    }

    public function render()
    {
        return view('components.form.input-array');
    }
}
