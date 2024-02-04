<?php
class Products
{
    private string $name;
    private int $price;
    private int $stock;

    public function __construct($name, $price, $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
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
    public function lowerStock()
    {
        if ($this->stock > 0) {
            return --$this->stock;
        } else {
            echo 'Out of stock';
        }
    }
}
