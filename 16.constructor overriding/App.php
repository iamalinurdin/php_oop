<?php

require_once 'app/Product.php';
require_once 'app/Computer.php';

use App\Computer;
use App\Product;

$product = new Product('Produk 1', 500000);
$computer = new Computer('Lenovo Ideapad', 10000000);

echo $product->getLabel();
echo $computer->getLabel();