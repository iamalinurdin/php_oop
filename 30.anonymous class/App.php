<?php

require_once __DIR__ . '/interfaces/Test.php';

$person = new class('Ali') implements Test {
  public string $name;
  
  public function __construct($name)
  {
    $this->name = $name;    
  }

  public function greet()
  {
    echo "Hello $this->name" . PHP_EOL;
  }
};

$person->greet();