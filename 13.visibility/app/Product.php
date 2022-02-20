<?php

namespace App;

class Product
{
  /**
   * Undocumented variable
   *
   * @var string
   */
  protected string $name;

  /**
   * Undocumented variable
   *
   * @var integer
   */
  protected int $price;

  /**
   * Undocumented function
   *
   * @param string $name
   * @param integer $price
   */
  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  /**
   * Undocumented function
   *
   * @return string
   */
  public function getLabel(): string
  {
    return "{$this->name} | Harga: Rp. {$this->price}" . PHP_EOL;
  }
}