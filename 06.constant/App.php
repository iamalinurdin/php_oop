<?php

require_once 'Person.php';

$person1 = new Person;

$person1->name = "Ali Nurdin";
$person1->address = "Bandung";
$person1->country = "Indonesia";

$person1->info();

// echo Person::APP_VERSION . PHP_EOL;

// echo $person1->sayHello('Jogn') . PHP_EOL;
// echo $person1->sayHello('Ali') . PHP_EOL;

$person2 = new Person;

$person2->cc = null;

// var_dump($person2);