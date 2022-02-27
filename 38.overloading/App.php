<?php

require_once __DIR__ . '/app/Zero.php';

use App\Zero;

$zero = new Zero;
$zero->firstname = "qwe";
$zero->middlename = "123";
$zero->lastname = "asd";

echo "Firstname: $zero->firstname" . PHP_EOL;
echo "Middlename: $zero->middlename" . PHP_EOL;
echo "Lastname: $zero->lastname" . PHP_EOL;

echo $zero->sayHello('a', 'b', 'c');
echo Zero::panggil('q', 'w', 'e');