<?php

namespace App\flyies;

use App\interfaces\FlyInterface;

class NotFly implements FlyInterface
{
    public function fly(): string
    {
        return ":c";
    }
}