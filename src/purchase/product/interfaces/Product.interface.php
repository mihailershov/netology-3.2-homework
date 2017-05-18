<?php

namespace purchase\product\interfaces;

interface Product
{
    public function isFood();
    public function hasDiscount();
    public function deliveryPrice();
    public function totalPrice();
    public function getProperty($property);
    public function setProperty($property, $value);
}