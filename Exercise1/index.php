<?php declare(strict_types=1);

require_once 'productCollection.php';
require_once 'Product.php';

foreach ($products as $product) {
    echo $product->printProduct() . PHP_EOL;
}
echo PHP_EOL;
$products['iPhone5S']->setPrice(909.9);
$products['iPhone5S']->setAmount(20);

echo $products['iPhone5S']->printProduct() . PHP_EOL;
