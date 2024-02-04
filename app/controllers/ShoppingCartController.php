<?php

require "/xampp/htdocs/store/app/models/Products.php";

$product1 = new Products("Produkt A", 10.99, 50, 1);
$product2 = new Products("Produkt B", 19.99, 30, 2);

$products = [$product1, $product2];

include "/xampp/htdocs/store/app/views/ShowProducts.php";
