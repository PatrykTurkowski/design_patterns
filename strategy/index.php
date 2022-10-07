<?php

require_once 'models/ducks/DomenicDuck.php';
require_once 'models/ducks/RubberDuck.php';
require_once 'models/ducks/WildDuck.php';



$wildDuck = new WildDuck;
echo $wildDuck->fly();
echo "<br>";
echo $wildDuck->sound();
echo "<br>";
echo "<br>";

$domenicDuck = new DomesticDuck;
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