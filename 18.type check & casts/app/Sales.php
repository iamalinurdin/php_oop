<?php

namespace App;

class Sales
{
  public Product $product;

  public function checkSales(Product $product, int $qty)
  {
    if ($product instanceof Computer)
    {
      return $product->getLabel() . "Qty: {$qty} | Elektronik" . PHP_EOL;
    }
    else if ($product instanceof Product)
    {
      return $product->getLabel() . "Qty: {$qty} | Produk Umum" . PHP_EOL;
    }
  }
}