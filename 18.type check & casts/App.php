<?php

require_once 'app/Product.php';
require_once 'app/Computer.php';
require_once 'app/Sales.php';

use App\Computer;
use App\Product;
use App\Sales;

$product = new Product('Produk 1', 500000);
$computer = new Computer('Lenovo Ideapad', 10000000);

$sales1 = new Sales;
$sales1->product = new Product('Produk 2', 50000);
echo $sales1->checkSales($sales1->product, 3);
// var_dump($sales1);

$sales2 = new Sales;
$sales2->product = new Computer('Asus ROG', 15000);
echo $sales2->checkSales($sales2->product, 12);
// var_dump($sales2);

// function checkType(Product $product)
// {
//   if ($product instanceof Computer)
//   {
//     return 'Produk Umum' . PHP_EOL;
//   }
//   else if ($product instanceof Product)
//   {
//     return 'Komputer' . PHP_EOL;
//   }
// }

// echo checkType(new Product('Produk 2', 50000));
// echo checkType(new Computer('Asus ROG', 15000));

// echo $product->getLabel();
// echo $computer->getLabel();