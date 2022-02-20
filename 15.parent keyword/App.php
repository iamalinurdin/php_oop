<?php

require_once 'app/Product.php';
require_once 'app/Computer.php';

use App\Computer;
use App\Product;

$computer = new Computer('Lenovo Ideapad', 10000000);

echo $computer->getProductLabel();