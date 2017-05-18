<?php

namespace purchase\product;

use purchase\product\interfaces\Product as ProductInterface;
use app\exceptions\all as exception;

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

    public function isFood()
    {
        return $this->type == 'food';
    }

    // Размер скидки
    public function discount()
    {
        $isFood = $this->isFood();
        $foodWeight = $this->weight;
        if (($isFood && $foodWeight > 10) || (!$isFood)) return $this->price * 0.1;
        return 0;
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
        try {
            if (!property_exists($this, $property)) {
                throw new exception\IsNotExistException('Property isn\'t exist');
            }
            if (empty($this->$property)) {
                throw new exception\UndefinedException('Property is not defined');
            }
            return $this->$property;
        } catch (exception\IsNotExistException $e) {
            echo 'Нет такого свойста (' . $e->getMessage() . ');';
        } catch (exception\UndefinedException $e) {
            echo 'Свойство не имеет значения (' . $e->getMessage() . ');';
        }
        return false;
    }

    // Универсальный сеттер
    public function setProperty($property, $value)
    {
        $this->$property = $value;
        return $value;
    }

}