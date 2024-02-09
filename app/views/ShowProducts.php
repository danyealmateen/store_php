<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Products</title>
</head>

<body class="body-main">

    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Visa feedback och felmeddelanden
    if (isset($_SESSION['feedback'])) {
        echo '<p>' . $_SESSION['feedback'] . '</p>';
        unset($_SESSION['feedback']);
    }

    if (isset($_SESSION['error'])) {
        echo '<p>' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }

    ?>
    <div>
        <img class="cantina-header" src="avatar.jpg" alt="cantina-header">
        <img class="cantina-header" src="cantina.png" alt="cantina-header">
    </div>
    <hr>
    <div class="product-container">
        <?php if (isset($products) && !empty($products)) {
            foreach ($products as $product) { ?>
                <div class="product-div">
                    <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                    <p>Price: <?php echo htmlspecialchars($product['price']); ?>$</p>
                    <p>Stock: <?php echo htmlspecialchars($product['stock']); ?></p>

                    <form action="CartControllerHandler.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" name="add_to_cart">Add to cart</button>
                    </form>
                </div>
        <?php }
        } ?>
    </div>
</body>

</html>