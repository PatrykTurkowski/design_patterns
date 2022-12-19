<?php

namespace App\flyies;

use App\interfaces\FlyInterface;

class TopFly implements FlyInterface
{
    public function fly(): string
    {
        return "wzium High!!!";
    }
}