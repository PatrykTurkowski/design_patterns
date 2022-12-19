<?php

namespace App\models;

class Calculator
{
    private int $num1;
    private int $num2;

    public function __construct(int $num1, int $num2)
    {

        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function add()
    {
        return $this->num1 + $this->num2;
    }
    public function subtract()
    {
        return $this->num1 - $this->num2;
    }
    public function multiply()
    {
        return $this->num1 * $this->num2;
    }
    public function divide()
    {
        return $this->num1 / $this->num2;
    }
}