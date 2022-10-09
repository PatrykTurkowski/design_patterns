<?php

namespace MyApp\flyies;

use MyApp\interfaces\FlyInterface;

class NotFly implements FlyInterface
{
    public function fly(): string
    {
        return ":c";
    }
}