<?php

namespace Creatures;

class Human
{
  public function greeting(): void
  {
    echo "Hello from " . __CLASS__  . PHP_EOL;
  }
}