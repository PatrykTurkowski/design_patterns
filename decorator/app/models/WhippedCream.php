<?php

namespace App\Models;

class WhippedCream extends Addition
{
    public function cost(): int
    {

        return $this->product->cost() + 3;
    }

    public function showCost()
    {
        echo $this->product->cost() + 3;
    }
}