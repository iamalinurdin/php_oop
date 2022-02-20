<?php

namespace Interfaces;

interface Car extends Vehicle
{
  public function __construct(string $name);

  public function run(string $sound);

  public function engine(string $type);

  public function maxSpeed(int $speed);
}