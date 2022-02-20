<?php

namespace App;

use Interfaces\Car;

class FormulaOne implements Car
{
  private string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function run(string $sound): void
  {
    echo "Hello, I am {$this->name} and my sound {$sound}" . PHP_EOL; 
  }

  public function maxSpeed(int $speed): void
  {
    if ($speed <= 250)
    {
      echo "Hello, I am {$this->name}. I am a shit Formula 1 car" . PHP_EOL;
    }
    else if ($speed >= 251 && $speed <= 300)
    {
      echo "Hello, I am {$this->name}. I am an average Formula 1 car" . PHP_EOL;
    }
    else if ($speed > 300)
    {
      echo "Hello, I am {$this->name}. I am a fast Formula 1 car" . PHP_EOL;
    }
  }

  public function engine(string $type)
  {
    echo "Hello, I am {$this->name}. My engine is {$type}" . PHP_EOL;
  }
}