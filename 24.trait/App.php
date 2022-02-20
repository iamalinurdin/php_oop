<?php

require_once __DIR__ . '/traits/SayGoodbye.php';
require_once __DIR__ . '/traits/SayHello.php';
require_once __DIR__ . '/traits/HasName.php';
require_once __DIR__ . '/app/Person.php';

$person = new Person;
$person->hello(null);
$person->goodbye(null);
$person->name = "asdasd";

var_dump($person);