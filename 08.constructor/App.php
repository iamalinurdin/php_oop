<?php

require_once __DIR__ . '/Person.php';

$person = new Person('John Doe', 'Cimindi');

$person->country = "Indonesia";

// echo $person->info();

var_dump($person);