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

            //Startar en session för att tilldena användaren ett unikt id, spårar användarens data och interkationer under sessionens livslängd
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['cart'][$productId] = isset($_SESSION['cart'][$productId]) ? $_SESSION['cart'][$productId] + $quantity : $quantity;

            //Logik för att lägga till produkten i kundkorgen.
        } catch (\Exception $e) {
            //Hantera fel
        }
    }
}
