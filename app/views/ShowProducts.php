<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <?php if (isset($products) && is_array($products)) : ?>
        <?php foreach ($products as $product) : ?>
            <div>
                <h2><?php echo htmlspecialchars($product->getName()); ?></h2>
                <p>Price: <?php echo htmlspecialchars($product->getPrice()); ?> kr</p>
                <p>Stock: <?php echo htmlspecialchars($product->getStock()); ?></p>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Inga produkter att visa.</p>
    <?php endif; ?>
</body>

</html>