<?php

require_once 'app/Product.php';
require_once 'app/Computer.php';

use App\Computer;
use App\Product;

$computer = new Computer('Produk 1', 10000);

echo $computer->getLabel();