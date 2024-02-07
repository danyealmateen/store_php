<?php

use App\models\ProductModel;

class ProductController
{
    public function showProducts()
    {
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts();
    }
}
