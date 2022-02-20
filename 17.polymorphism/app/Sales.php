<?php

namespace App;

class Sales
{
  public Product $product;

  public function checkSales(Product $product, int $qty)
  {
    return $product->getLabel() . "qty: {$qty}" . PHP_EOL;
  }
}