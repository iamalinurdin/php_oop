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
}