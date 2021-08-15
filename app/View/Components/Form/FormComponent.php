<?php

namespace App\View\Components\Form;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use App\View\Components\Form\Arrayable;
use App\View\Components\Form\Input;
use App\View\Components\Form\InputArray;
use Livewire\Component;

class FormComponent extends Component
{
    public $title;
    public $layout;
    public $data = [];

    public function data($key, $default = null)
    {
        return Arr::get($this->data, $key, $default);
    }

    public function fields()
    {
        return [];
    }

    public function buttons()
    {
        return [];
    }

    public function addArrayableItem($name)
    {
        $array = $this->data($name);
        $key = $array ? max(array_keys($array)) + 1 : 0;

        Arr::set($this->data, $name . '.' . $key, []);
    }

    public function removeArrayableItem($key)
    {
        Arr::forget($this->data, $key);
    }
}
