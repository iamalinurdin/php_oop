<?php

use App\City;
use App\Province;

require_once 'abstract/Location.php';
require_once 'app/City.php';
require_once 'app/Province.php';

$city = new City;
$province = new Province;

echo $city->getName();
echo $province->getName();