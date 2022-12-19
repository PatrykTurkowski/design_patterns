<?php

use App\Weather;
use App\WeatherWomen;
use App\YourWeather;

require_once realpath("vendor/autoload.php");




$weatherWomen = new WeatherWomen;
$yourWeather = new YourWeather;
$weather = new Weather;

$weather->attach($yourWeather);
echo '<br>';
echo '<br>';
$weather->attach($weatherWomen);

$weather->someBusinessLogic();

$weather->detach($weatherWomen);
echo '<br>';
echo '<br>';
$weather->someBusinessLogic();