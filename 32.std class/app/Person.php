<?php

namespace App;

class Person
{
  public string $name, $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
  
}