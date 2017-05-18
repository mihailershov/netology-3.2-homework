<?php

interface ProductInterface
{
    public function isFood();
    public function discount();
    public function deliveryPrice();
    public function totalPrice();
    public function getProperty($property);
    public function setProperty($property, $value);
    public function setPropertyWithReturn($property, $value);
}