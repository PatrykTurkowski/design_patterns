<?php

namespace MyApp\flyies;

use MyApp\interfaces\FlyInterface;

class TopFly implements FlyInterface
{
    public function fly(): string
    {
        return "wzium High!!!";
    }
}