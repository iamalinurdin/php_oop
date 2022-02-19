<?php

class Person
{
  const APP_VERSION = '1.0.0';

  var string $name = "John Doe";
  var string $address = "Cimindi";
  var string $country = "Mamarika";
  var ?string $cc;

  /**
   * Undocumented function
   *
   * @param string $name
   * @param string $address
   */
  public function __construct(string $name, string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  /**
   * Undocumented function
   */
  public function __destruct()
  {
    echo "Application is shutdown" . PHP_EOL; 
  }

  /**
   * Undocumented function
   *
   * @param string|null $name
   * @return void
   */
  public function sayHello(?string $name)
  {
    if (!is_null($name))
    {
      return "Hello, my name is {$name}";
    }
    else
    {
      return "Hello, my name is {$this->name} from this keyword";
    }
  }

  public function info()
  {
    return "version " . self::APP_VERSION . PHP_EOL;
  }
}