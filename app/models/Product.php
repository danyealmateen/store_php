<?php

namespace App\Models;

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $result = $this->db->getConnection()->query($sql);

        $products = [];

        if ($result->num_rows > 0) {
            echo 'Fetch data successfull';
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        } else {
            echo 'Could not fetch data';
        }
        return $products;
    }
    public function decreaseStock($productId, $quantity)
    {
        $sql = "UPDATE products SET stock = stock - ? WHERE id = ? AND stock >= ? ";
        $stmt = $this->db->getConnection()->prepare($sql);
    }
}
