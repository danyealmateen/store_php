<?php

$product1 = new App\Models\Products("Produkt A", 10.99, 50, 1);
$product2 = new App\Models\Products("Produkt B", 19.99, 30, 2);

$products = [$product1, $product2];

include "/xampp/htdocs/store/app/views/ShowProducts.php";
