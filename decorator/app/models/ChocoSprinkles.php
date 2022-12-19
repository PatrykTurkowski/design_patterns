<?php

namespace App\Models;

class ChocoSprinkles extends Addition
{
    public function cost(): int
    {

        return $this->product->cost() + 1;
    }

    public function showCost()
    {
        echo $this->product->cost() + 1;
    }
}