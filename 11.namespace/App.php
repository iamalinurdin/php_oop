<?php

require_once 'creatures/Human.php';
require_once 'creatures/Animal.php';
require_once 'functions/Helper.php';

$human = new Creatures\Human;
$animal = new Creatures\Animal;

$human->greeting();

echo Helper\VERSION . PHP_EOL;
Helper\helpMe();