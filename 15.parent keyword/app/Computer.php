<?php

namespace App;

class Computer extends Product
{
  public function getLabel(): string
  {
    return "Nama Komputer: {$this->name} | Rp. {$this->price}" . PHP_EOL;
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

  public function tryOverriding(string $params1, string $params2)
  {
    
  }
}