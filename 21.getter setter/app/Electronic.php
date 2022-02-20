<?php

namespace App;

class Electronic
{
  private string $name;
  private bool $soldout;

  public function setName(string $name): void
  {
    if (trim($name) != '')
    {
      $this->name = $name;
    }
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setSoldout(bool $soldout): void
  {
    $this->soldout = $soldout;
  }

  public function isSoldout(): bool
  {
    return $this->soldout;
  }
}