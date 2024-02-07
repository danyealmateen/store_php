<?php

namespace App;

$connection = mysqli_connect('localhost', 'root', '', 'store_products');
if (!$connection) {
    die("Databasanslutning misslyckades:" . mysqli_connect_error());
}

$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Product:" . $row["name"] . " - " . "Price:" . $row["price"] . "$" . "<br>";
    }
} else {
    echo "Frågan misslyckades: " . mysqli_error($connection);
}

mysqli_close($connection);
