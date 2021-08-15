<?php

namespace App\Traits;

trait WithSwitch
{
    public function switch()
    {
        $this->props['switch'] = true;

        return $this;
    }
}
