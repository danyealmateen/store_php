<?php

require "/xampp/htdocs/store/app/models/Products.php";

$product1 = new Products("Produkt A", 10.99, 50);
$product2 = new Products("Produkt B", 19.99, 30);
$product3 = new Products("Produkt C", 7.99, 75);

$products = [$product1, $product2, $product3];

include "/xampp/htdocs/store/app/views/ShowProducts.php";
