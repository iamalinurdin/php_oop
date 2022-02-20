<?php

namespace App;

use Traits\SayGoodbye;
use Traits\SayHello;

class Person extends Human
{
  use SayGoodbye, SayHello {
    SayGoodbye::greeting insteadOf SayHello;
  }

  public function run()
  {
    echo "I'm {$this->name}, im on running" . PHP_EOL;
  }
}