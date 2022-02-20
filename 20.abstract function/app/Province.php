<?php

namespace App;

use Abstracts\Location;

class Province extends Location
{
  public function getName()
  {
    return "Get Name from " . __CLASS__ . PHP_EOL; 
  }
}