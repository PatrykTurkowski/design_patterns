<?php

namespace App\flyies;

use App\interfaces\FlyInterface;

class MidFly implements FlyInterface
{
    public function fly(): string
    {
        return "mrał mid!!!";
    }
}