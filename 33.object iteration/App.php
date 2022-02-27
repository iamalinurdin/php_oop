<?php

use App\Person;

require_once __DIR__ . '/app/Person.php';

$person = new Person('Ali', 25);

var_dump($person);
