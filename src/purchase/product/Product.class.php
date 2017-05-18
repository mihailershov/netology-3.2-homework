<?php

namespace purchase\product;

use purchase\product\interfaces\Product as ProductInterface;

abstract class Product extends \Exception implements ProductInterface
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
        $isFood = $this->type == 'food';
        $foodWeight = $this->weight;
        if (($isFood && $foodWeight > 10) || (!$isFood)) return $this->price * 0.1;
        return 0;
    }

    // Цена доставки
    public function deliveryPrice()
    {
        if ($this->discount()) return 300;
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
        try {
            if (!property_exists($this, $property)) {
                throw new \Exception('Property isn\'t exist');
            }
            if (empty($property)) {
                throw new \Exception('Property is not defined');
            }
            return $this->$property;
        } catch (\Exception $e) {
            echo 'Нет такого свойста (' . $e->getMessage() . ');';
        } catch (\Exception $e) {
            echo 'Свойство не имеет значения (' . $e->getMessage() . ');';
        }
        return false;
    }

    // Универсальный сеттер
    public function setProperty($property, $value)
    {
        if (!property_exists($this, $property)) {
            return false;
        }

        $this->$property = $value;
        return $value;
    }

}