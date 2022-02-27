<?php

namespace App;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

class Person implements IteratorAggregate
{
  public string $name, $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
  
  public function getIterator(): Traversable
  {
    return new ArrayIterator(
       [
         'name' => $this->name,
         'age' => $this->age
       ]
    );
  }
}