<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <h4>Products</h4>
    <?php
    foreach ($products as $product) {
        echo 'Produkt:' . $product->getName() . '<br>';
        echo 'Pris:' .  $product->getPrice() . '<br>';
        echo 'Lager:' .  $product->getStock() . '<br>';
        echo '<input type="submit" value="Lägg till i kundvagn">';
        echo '<br>';
        echo '<hr>';
        echo '<form action="addToCart.php" method="post"';
        echo '<input type="hidden" name="product_id" value="' . $product->getId() . '">';
        echo '</form>';
    }
    ?>
</body>

</html>