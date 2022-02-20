<?php

use App\FormulaOne;

require_once __DIR__ . '/interfaces/Car.php';
require_once __DIR__ . '/app/FormulaOne.php';

$haas = new FormulaOne('Haas');
$haas->run('brem brem brem');
$haas->maxSpeed(212);
$haas->engine('v8');

$mercedes = new FormulaOne('Mercedes');
$mercedes->run('ngok ngok ngok');
$mercedes->maxSpeed(356);
$mercedes->engine('v6');

