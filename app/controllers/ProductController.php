<?php

namespace App\Controllers;

use App\models\ProductModel;
use App\Database;

class ProductController
{
    private $model;

    public function __construct()
    {
        $database = new Database();
        $this->model = new ProductModel($database->connect());
    }
    public function showProducts()
    {
        $products = $this->model->getAllProducts();
        include 'views/ShowProducts.php';
    }
}
