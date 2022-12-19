<?php

namespace App\Models;

use App\Interfaces\AdditionInterface;

class Coffe implements AdditionInterface
{
    public function cost(): int
    {
        return 10;
    }
}