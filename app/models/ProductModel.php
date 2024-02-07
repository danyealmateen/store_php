<?php

namespace App\Models;

use mysqli;

class ProductModel
{
    private $db;

    public function __construct(mysqli $db)
    {
        $this->db = $db;
    }

    public function getAllProducts()
    {
        $query = "SELECT * FROM products";
        $result = $this->db->$query($query);
        $products = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $product = new Products($row['name'], $row['price'], $row['stock'], $row['id']);
            $products[] = $product;
        }
        return $products;
    }
}
