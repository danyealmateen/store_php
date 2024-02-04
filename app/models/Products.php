<?php

namespace App\Models;

class Products
{
    private string $name;
    private int $price;
    private int $stock;
    private int $id;

    public function __construct(string $name, float $price, int $stock, int $id)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getStock()
    {
        return $this->stock;
    }
    public function getId()
    {
        return $this->id;
    }
    public function lowerStock()
    {
        if ($this->stock > 0) {
            --$this->stock;
            return true;
        } else {
            return false;
        }
    }
}
