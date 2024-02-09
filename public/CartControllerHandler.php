<?php
require_once '/xampp/htdocs/store/vendor/autoload.php';

use \App\Controllers\CartController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    $cartController = new CartController();
    $cartController->addToCart($productId, $quantity);
}
