<?php

namespace App;

use Traits\All;
use Traits\SayGoodbye;
use Traits\SayHello;

class Person extends Human
{
  use All;

  public function run()
  {
    echo "I'm {$this->name}, im on running" . PHP_EOL;
  }
}