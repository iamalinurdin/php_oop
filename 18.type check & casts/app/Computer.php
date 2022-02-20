<?php

namespace App;

class Computer extends Product
{
  /**
   * Undocumented function
   *
   * @param string $name
   * @param integer $price
   */
  public function __construct(string $name, int $price)
  {
    parent::__construct($name, $price, 'Electronic');
  }

  /**
   * Undocumented function
   *
   * @return string
   */
  public function getLabel(): string
  {
    return "Nama Komputer: {$this->name} | Rp. {$this->price} | {$this->type}" . PHP_EOL;
  }

  /**
   * Undocumented function
   *
   * @return void
   */
  public function getProductLabel()
  {
    return parent::getLabel();
  }
}