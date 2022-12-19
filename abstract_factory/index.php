<?php

use App\Factories\cars\types\AudiFactory;
use App\Factories\cars\types\ToyotaFactory;
use App\models\Car;

require_once realpath("vendor/autoload.php");

$car = new Car;
$audi = $car->create(new AudiFactory);
$toyota = $car->create(new ToyotaFactory);

echo $audi->getCar();
echo "<br>";
echo $toyota->getCar();