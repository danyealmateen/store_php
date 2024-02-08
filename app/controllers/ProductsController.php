<?php

namespace App\Controllers;

use App\Models\Product;

class ProductsController
{
    public function showProducts()
    {
        $productModel = new Product();
        $products = $productModel->getAllProducts();
        include '/xampp/htdocs/store/app/views/ShowProducts.php';
    }
}
