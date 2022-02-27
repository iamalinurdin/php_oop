<?php

function getGenap(int $number) : Iterator
{
  $array = [];

  for ($index = 0; $index <= $number; $index++) 
  { 
    if ($index % 2 == 0) 
    {
      $array[] = $index;
    }
  }

  return new ArrayIterator($array);
}

function users()
{
  yield "user1" => 'User 1';
  yield "user2" => 'User 2';
  yield "user3" => 'User 3';
}


foreach (users() as $user) 
{
  echo $user . PHP_EOL;
}

// var_dump(getGenap(100));

function getGanjil(int $number) : Iterator
{
  $array = [];

  for ($index = 0; $index <= $number; $index++) 
  { 
    if ($index % 2 == 1) 
    {
      yield $index;
    }
  }

}

// var_dump(getGanjil(100));

// foreach (getGanjil(100) as $value) 
// {
//   echo "GANJIL: $value" . PHP_EOL;
// }