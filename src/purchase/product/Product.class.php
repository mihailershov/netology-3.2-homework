<?php

namespace purchase\product;

use purchase\product\interfaces\Product as ProductInterface;
use app\exceptions\all as exceptions;

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

    public function isFood()
    {
        return $this->type == 'food';
    }

    // Размер скидки
    public function hasDiscount()
    {
        $isFood = $this->isFood();
        $foodWeight = $this->weight;
        if (($isFood && $foodWeight > 10) || (!$isFood)) return $this->price * 0.1;
        return 0;
    }

    // Цена доставки
    public function deliveryPrice()
    {
        $discount = $this->hasDiscount();
        if ($discount > 0) return 300;
        return 250;
    }

    // Цена с учетом цены доставки и скидки
    public function totalPrice()
    {
        return $this->price - $this->hasDiscount() + $this->deliveryPrice();
    }

    // Универсальный геттер
    public function getProperty($property)
    {
        // Проба исключений (намеренное усложнение)
        try {
            if (!property_exists($this, $property)) {
                throw new exceptions\IsNotExistException('Property isn\'t exist');
            }
            if (empty($this->$property)) {
                throw new exceptions\UndefinedException('Property does not defined');
            }
            return $this->$property;
        } catch (exceptions\IsNotExistException $e) {
            echo 'Нет такого свойста (' . $e->getMessage() . ');<br>';
        } catch (exceptions\UndefinedException $e) {
            echo 'Свойство не имеет значения (' . $e->getMessage() . ');<br>';
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