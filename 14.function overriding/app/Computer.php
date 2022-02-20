<?php

namespace App;

class Computer extends Product
{
  public function getLabel(): string
  {
    return "Nama Komputer: {$this->name} | Rp. {$this->price}" . PHP_EOL;
  }
}