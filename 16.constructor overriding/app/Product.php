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
   * Undocumented variable
   *
   * @var string
   */
  protected string $type;

  /**
   * Undocumented function
   *
   * @param string $name
   * @param integer $price
   */
  public function __construct(string $name, int $price, string $type = 'Uncategories')
  {
    $this->name = $name;
    $this->price = $price;
    $this->type = $type;
  }

  /**
   * Undocumented function
   *
   * @return string
   */
  public function getLabel(): string
  {
    return "{$this->name} | Harga: Rp. {$this->price} | {$this->type}" . PHP_EOL;
  }
}