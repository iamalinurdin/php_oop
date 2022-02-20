<?php

require_once __DIR__ . '/traits/SayGoodbye.php';
require_once __DIR__ . '/traits/SayHello.php';
require_once __DIR__ . '/traits/HasName.php';
require_once __DIR__ . '/traits/CanRun.php';
require_once __DIR__ . '/app/Human.php';
require_once __DIR__ . '/app/Person.php';

use App\Person;

$person = new Person;
$person->greeting();
// $person->goodbye(null);
$person->name = "asdasd";
$person->run();
// var_dump($person);