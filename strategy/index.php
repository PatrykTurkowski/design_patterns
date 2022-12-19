<?php

use App\ducks\DomenicDuck;
use App\ducks\RubberDuck;
use App\ducks\WildDuck;

require_once realpath("vendor/autoload.php");



$wildDuck = new WildDuck;
echo $wildDuck->fly();
echo "<br>";
echo $wildDuck->sound();
echo "<br>";
echo "<br>";

$domenicDuck = new DomenicDuck;
echo $domenicDuck->fly();
echo "<br>";
echo $domenicDuck->sound();
echo "<br>";
echo "<br>";
$RubberDuck = new RubberDuck;
echo $RubberDuck->fly();
echo "<br>";
echo $RubberDuck->sound();
echo "<br>";
echo "<br>";