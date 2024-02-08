<?php
require_once '/xampp/htdocs/store/vendor/autoload.php';


use App\Models\Product;
use App\Controllers\ProductsController;

$product = new Product();
$products = $product->getAllProducts();

$controller = new ProductsController();
$controller = $controller->showProducts();
