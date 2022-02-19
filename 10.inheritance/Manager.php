<?php

class Manager
{
  var string $name;

  public function sayHello(?string $name): void
  {
    echo "Hello, my name is {$this->name}" . PHP_EOL;
  }
}