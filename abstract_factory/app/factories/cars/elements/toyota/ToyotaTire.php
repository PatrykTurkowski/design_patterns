<?php

namespace App\Factories\cars\elements\toyota;

use App\factories\cars\interfaces\TireInterface;

class ToyotaTire implements TireInterface
{
    public function getTire(): string
    {
        return 'small';
    }
}