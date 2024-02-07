<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <?php foreach ($products as $product) : ?>
        <div>
            <p>Produkt: <?php echo htmlspecialchars($product->getName()); ?></p>
            <p>Pris: <?php echo htmlspecialchars($product->getPrice()); ?></p>
            <form action="addToCart.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->getId()); ?>">
                <input type="submit" value="Lägg till i kundvagnen">
            </form>
        </div>
        <hr>
    <?php endforeach; ?>
</body>

</html>