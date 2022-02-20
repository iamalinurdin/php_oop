<?php

namespace App;

use Traits\CanRun;
use Traits\HasName;
use Traits\SayGoodbye;
use Traits\SayHello;

class Person extends Human
{
  use SayGoodbye, SayHello, HasName, CanRun;
  // {
  //   hello as private;
  //   goodbye as private;
  // }

  public function run()
  {
    echo "I'm {$this->name}, im on running" . PHP_EOL;
  }
}