<?php

use App\commands\calculator\AddCommand;
use App\commands\calculator\CommandInvoker;
use App\models\Calculator;

require_once realpath("vendor/autoload.php");

$calculator = new Calculator(1, 2);

$invoker = new CommandInvoker(new AddCommand($calculator));

$output = $invoker->handle();

echo $output;