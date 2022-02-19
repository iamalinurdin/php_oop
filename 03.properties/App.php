<?php

require_once 'Person.php';

$person1 = new Person;

$person1->name = "Ali Nurdin";
$person1->address = "Bandung";
$person1->country = "Indonesia";

$person2 = new Person;

$person2->cc = null;

var_dump($person2);