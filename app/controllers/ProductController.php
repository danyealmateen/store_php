<?php

namespace App\Controllers;

use App\models\ProductModel;

class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }
    public function showProducts()
    {
        // $productModel = new ProductModel();
        $products = $this->model->getAllProducts();
    }
}
