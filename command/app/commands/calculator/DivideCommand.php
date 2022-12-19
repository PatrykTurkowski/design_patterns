<?php

namespace App\commands\calculator;

use App\commands\calculator\interfaces\CalculatorCommandInterface;
use App\models\Calculator;

class DivideCommand implements CalculatorCommandInterface
{
    private Calculator $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function execute()
    {
        return $this->calculator->divide();
    }
}