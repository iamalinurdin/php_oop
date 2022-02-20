<?php

namespace Traits;

trait SayGoodbye
{
  public function goodbye(?string $name)
  {
    if (is_null($name))
    {
      echo "Goodbye" . PHP_EOL;
    }
    else
    {
      echo "Goodbye {$name}" . PHP_EOL;
    }
  }

  public function greeting()
  {
    echo "Greeting from trait SayGoodbye " . __CLASS__ . PHP_EOL;
  }
}