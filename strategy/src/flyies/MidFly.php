<?php

namespace MyApp\flyies;

use MyApp\interfaces\FlyInterface;

class MidFly implements FlyInterface
{
    public function fly(): string
    {
        return "mrał mid!!!";
    }
}