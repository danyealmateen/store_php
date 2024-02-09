<?php

namespace App\Controllers;

use App\Models\Product;

class CartController
{
    public function addToCart($productId, $quantity)
    {
        $productModel = new Product();

        try {
            $productModel->decreaseStock($productId, $quantity);
            
            $_SESSION['cart'][$productId] = isset($_SESSION['cart'][$productId]) ? $_SESSION['cart'][$productId] + $quantity : $quantity;

            $_SESSION['feedback'] = 'Produkten har lagts till i kundvagnen.';
        } catch (\Exception $e) {
            $_SESSION['error'] = 'Kunde inte lägga till produkten i kundvagnen';
        }
    }
}
