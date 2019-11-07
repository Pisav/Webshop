<?php
require 'classes/Product.php';
require 'classes/ProductCatalogue.php';
require 'classes/ShoppingCart.php';

$catalogue = new ProductCatalogue('products.json');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="webshop">
    <h2 class="webshop__title">My webshop <a href="cart.php" class="cart-icon">Winkelwagen</a></h2>
    <div class="webshop__content">
        <div class="catalogue">
            <?php foreach ($catalogue->getAllProducts() as $product): ?>
                <div class="product">
                    <h3><?php echo $product->getTitle() ?></h3>
                    <span class="price">€ <?php echo $product->getPrice() ?> </span>
                    <p class="product_box"><?php echo $product->getDescription() ?></p>
                    <img src="<?php echo $product->getImage()?>" >
                    <a href="cart.php?action=add_product&code=<?php echo $product->getCode() ?>" class="cart-button">Toevoegen</a>
                   
                    <a href="info.php" class="info-button">Info</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
</body>
</html>