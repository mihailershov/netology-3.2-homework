<?php

class Car extends Product implements CarInterface
{
    protected $color = 'blue';
    protected $tankSize = 50;
    protected $oilVolume;

    public function setOilVolume($volume)
    {
        if ($volume > $this->tankSize) {
           $this->oilVolume = $this->tankSize;
        }
        if ($volume < 0) {
            $this->oilVolume = 0;
        }
        if ($volume < $this->tankSize) {
            $this->oilVolume = $volume;
        }
    }

    public function isHasOil()
    {
        if ($this->oilVolume/$this->tankSize < 0.1) {
            return false;
        }
        return true;
    }
}