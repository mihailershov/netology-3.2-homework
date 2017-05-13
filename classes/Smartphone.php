<?php

class Smartphone extends Product implements SmartphoneInterface
{
    protected $color;
    protected $model;

    use SmartphoneTrait;
}