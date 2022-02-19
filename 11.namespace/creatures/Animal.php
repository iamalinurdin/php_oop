<?php

namespace Creatures;

class Animal
{
  public function greeting(): void
  {
    echo "Hello from " . __CLASS__  . PHP_EOL;
  }
}