<?php

require_once 'Person.php';

$person = new Person;

$person->name = "Ali Nurdin";
$person->address = "Bandung";
$person->country = "Indonesia";

echo $person->info();