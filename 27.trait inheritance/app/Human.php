<?php

namespace App;

class Human
{
  public function goodbye(?string $name)
  {
    echo "Goodbye from " . __CLASS__ . PHP_EOL;
  }

  public function hello(?string $name)
  {
    echo "Hello from " . __CLASS__ . PHP_EOL;
  }
}