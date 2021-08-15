<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;

trait WithValidation
{
    public function validation($rules = null, $messages = [], $attributes = [])
    {
        $validator = Validator::make($this->data, $rules ?? $this->getRules(), $messages, $attributes);
        $validatedData = $validator->validate();

        $this->resetErrorBag();

        return $validatedData;
    }
}
