<?php

use App\Models\ChocoSprinkles;
use App\Models\Coffe;
use App\Models\LeonSprinkles;
use App\Models\WhippedCream;

require_once realpath("vendor/autoload.php");

$order = new Coffe();
$order = new ChocoSprinkles($order);
$order = new LeonSprinkles($order);
$order = new WhippedCream($order);


$order->showCost();