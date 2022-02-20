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

  /**
   * Undocumented function
   *
   * @param string $params1
   * @param string $params2
   * @return void
   */
  public function tryOverriding(string $params1, string $params2)
  {
    return $params1 . ' ' . $params2 . PHP_EOL;
  }
}