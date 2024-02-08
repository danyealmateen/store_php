<?php

namespace App\Controllers;

use App\Models\Product;

class CartController
{
    public function addToCart($productId, $quantity)
    {
        $productModel = new Product();
        $productModel->decreaseStock($productId, $quantity);
    }
}
