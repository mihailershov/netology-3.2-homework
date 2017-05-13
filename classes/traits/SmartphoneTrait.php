<?php

trait SmartphoneTrait
{
    // кхм-кхм
    public function areYouRich()
    {
        if ($this->model == 'android') return false;
        return true;
    }
}