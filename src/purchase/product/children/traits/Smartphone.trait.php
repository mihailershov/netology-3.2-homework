<?php

namespace purchase\product\children\traits;

trait Smartphone
{
    // кхм-кхм
    public function areYouRich()
    {
        if ($this->model == 'android') return false;
        return true;
    }
}