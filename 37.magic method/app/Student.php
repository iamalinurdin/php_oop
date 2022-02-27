<?php

namespace App;

class Student
{
  public int $value;

  public string $name, $id;

  public function __clone()
  {
    unset($this->id);
  }

  public function __toString()
  {
    return "Name: $this->name. Score: $this->value"; 
  }

  public function __invoke()
  {
    return "Invoke magic method __invoke";
  }

  public function __debugInfo()
  {
    return [
      "author" => "Ali Nurdin"
    ];
  }
}