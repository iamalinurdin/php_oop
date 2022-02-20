<?php

namespace Traits;

trait SayHello
{
  public function hello(?string $name)
  {
    if (is_null($name))
    {
      echo "Hello" . PHP_EOL;
    }
    else
    {
      echo "Hello {$name}" . PHP_EOL;
    }
  }

  public function greeting()
  {
    echo "Greeting from " . __CLASS__ . PHP_EOL;
  }
}