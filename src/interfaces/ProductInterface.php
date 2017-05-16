<?php

interface ProductInterface
{
    public function discount();
    public function deliveryPrice();
    public function totalPrice();
    public function getProperty($property);
    public function setProperty($property, $value);
}