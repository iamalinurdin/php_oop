<?php

use App\Electronic;

require_once __DIR__ . '/app/Electronic.php';

$laptop = new Electronic;
$laptop->setName('Lenovo Thinkpad');
$laptop->setSoldout(true);

echo $laptop->getName() . PHP_EOL;
echo $laptop->isSoldout() . PHP_EOL;

$handphone = new Electronic;
$handphone->setName('Aipul 14');
$handphone->setSoldout(true);

echo $handphone->getName() . PHP_EOL;
echo $handphone->isSoldout() . PHP_EOL;