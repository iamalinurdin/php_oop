<?php

namespace App;

class Helper
{
  public static string $name = "Helper";

  public static function generate(string $password)
  {
    $result = '';

    for ($index = 0; $index < strlen($password); $index++) 
    { 
      $string = substr($password, $index, 1);
      $result .= ord($string);
    }

    return $result;
  }
}