<?php

namespace App\Traits;

trait WithPrefix
{
    public function prefix($prefix)
    {
        $this->props['prefix'] = $prefix . '.';

        return $this;
    }
}
