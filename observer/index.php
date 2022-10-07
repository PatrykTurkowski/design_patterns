<link rel="stylesheet" href="style.css">
<?php
require_once('model/Weather.php');
require_once('model/YourWeather.php');
require_once('model/WeatherWoman.php');


$weatherWoman = new WeatherWomen;
$yourWeather = new YourWeather;
$weather = new Weather;

$weather->attach($yourWeather);
echo '<br>';
echo '<br>';
$weather->attach($weatherWoman);

$weather->someBusinessLogic();

$weather->detach($weatherWoman);
echo '<br>';
echo '<br>';
$weather->someBusinessLogic();