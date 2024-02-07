<?php

namespace App\Models;
use App\Database;

class ProductModel
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function getAllProducts()
    {
        $query = "SELECT * FROM products";
        $result = mysqli_query($this->db, $query);
        var_dump($result);
    }
}
