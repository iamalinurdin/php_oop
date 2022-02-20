<?php

require_once 'creatures/Human.php';
require_once 'creatures/Animal.php';
require_once 'functions/Helper.php';

use Creatures\Animal;
use Creatures\Human as CreaturesHuman;
use function Helper\helpMe;
use const Helper\VERSION;
use Club\{Liverpool, Chelsea, ManCity};

$human = new CreaturesHuman;
$animal = new Animal;

$human->greeting();

echo VERSION . PHP_EOL;
helpMe(); 