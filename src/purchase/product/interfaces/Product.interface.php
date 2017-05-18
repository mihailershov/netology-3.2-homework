<?php

namespace purchase\product\interfaces;

interface Product
{
    public function discount();
    public function deliveryPrice();
    public function totalPrice();
    public function getProperty($property);
    public function setProperty($property, $value);
}