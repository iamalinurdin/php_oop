<?php

class Person
{
  var string $name = "John Doe";
  var string $address = "Cimindi";
  var string $country = "Mamarika";
  var ?string $cc;

  public function sayHello(?string $name)
  {
    if (!is_null($name))
    {
      return "Hello, my name is {$name}";
    }
    else
    {
      return "Hello, my name is {$this->name} from this keyword";
    }
  }
}