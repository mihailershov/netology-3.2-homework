<?php

abstract class Product implements ProductInterface
{
    protected $title;
    protected $price;
    protected $type;
    protected $weight;


    // Создаем объект
    public function __construct($title, $price, $type, $weight)
    {
        $this->title = $title;
        $this->price = $price;
        $this->type = $type;
        $this->weight = $weight;
    }

    // Размер скидки
    public function discount()
    {
        $isFood = $this->isFood();
        $foodWeight = $this->weight;
        if (($isFood && $foodWeight > 10) || (!$isFood)) return $this->price*0.1;
        return 0;
    }

    public function isFood()
    {
        return $this->type == 'food';
    }

    // Цена доставки
    public function deliveryPrice()
    {
        $discount = $this->discount();
        if ($discount > 0) return 300;
        return 250;
    }

    // Цена с учетом цены доставки и скидки
    public function totalPrice()
    {
        return $this->price - $this->discount() + $this->deliveryPrice();
    }

    // Универсальный геттер
    public function getProperty($property)
    {
        return $this->$property;
    }

    // Универсальный сеттер
    public function setProperty($property, $value) {
        $this->$property = $value;
    }


    // Универсальный сеттер с return'ом
    public function setPropertyWithReturn($property, $value) {
        $this->$property = $value;
        return $this;
    }

}