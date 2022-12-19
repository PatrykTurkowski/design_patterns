<?php

namespace App\commands\calculator;

use App\commands\calculator\interfaces\CalculatorCommandInterface;

class CommandInvoker
{
    private $command;

    public function __construct(CalculatorCommandInterface $command)
    {
        $this->command = $command;
    }

    public function setCommand(CalculatorCommandInterface $command)
    {
        $this->command = $command;
    }

    public function handle()
    {
        return $this->command->execute();
    }
}