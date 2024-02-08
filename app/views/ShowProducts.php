<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <h1></h1>
    <?php if (isset($products) && !empty($products)) {
        foreach ($products as $product) { ?>
            <div>
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                <p>Price: <?php echo htmlspecialchars($product['price']); ?></p>
                <p>Stock: <?php echo htmlspecialchars($product['stock']); ?></p>
            </div>
            <hr>
    <?php
        }
    }
    ?>
</body>

</html>