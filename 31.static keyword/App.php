<?php

use App\Helper;

require_once __DIR__ . "/app/Helper.php";

$helper = new Helper;
var_dump($helper);
var_dump(Helper::$name);
var_dump(Helper::generate('password'));
var_dump(Helper::generate('coba'));