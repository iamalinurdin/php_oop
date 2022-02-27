<?php

use App\Person;

require_once __DIR__ . '/app/Person.php';

$person = [
  'name' => 'Ali Nurdin',
  'age' => 26,
];

$object = (object) $person;

echo $object->name . PHP_EOL;
echo $object->age . PHP_EOL;

$array = (array) $object;

var_dump($array);

$person = new Person('Ali', 25);
var_dump((array) $person);