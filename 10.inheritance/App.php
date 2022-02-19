<?php

require_once __DIR__ . '/Manager.php';
require_once __DIR__ . '/VicePresident.php';

$manager = new Manager;
$manager->name = "Budi";
$manager->sayHello(null);

$vp = new VicePresident;
$vp->name = 'Ali Nurdin';
$vp->sayHello(null);