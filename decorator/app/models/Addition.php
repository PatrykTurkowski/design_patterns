<?php

namespace App\Models;

use App\Interfaces\AdditionInterface;

abstract class Addition implements AdditionInterface
{
    protected AdditionInterface $product;

    public function __construct(AdditionInterface $product)
    {
        $this->product = $product;
    }

    public function cost(): int
    {
        return 10;
    }
}