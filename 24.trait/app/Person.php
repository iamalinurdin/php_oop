<?php

use Traits\HasName;
use Traits\SayGoodbye;
use Traits\SayHello;

class Person
{
  use SayGoodbye, SayHello, HasName;


}