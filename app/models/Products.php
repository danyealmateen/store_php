<?php
class Products
{
    private string $name;
    private int $price;
    private int $stock;
    private int $id;

    public function __construct($name, $price, $stock, $id)
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
            return --$this->stock;
        } else {
            echo 'Out of stock';
        }
    }
}
