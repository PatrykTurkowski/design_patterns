<?php

namespace App\ducks;

use App\flyies\MidFly;
use App\sounds\KwaSound;


class DomenicDuck extends Duck
{
    public function fly(): string
    {
        $fly = new MidFly;
        return $fly->fly();
    }
    public function sound(): string
    {
        $sound = new KwaSound;
        return $sound->sound();
    }
}