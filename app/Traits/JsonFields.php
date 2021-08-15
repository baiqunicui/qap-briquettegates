<?php

namespace App\Traits;

use Illuminate\Support\Arr;

trait JsonFields
{
    public $array = [];
    public $i = 1;

    public function add($name, $i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->array[$name], $i);
    }

    public function hapus($name, $key)
    {
        Arr::forget($this->array[$name], $key);
    }
}
