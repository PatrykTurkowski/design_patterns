<?php

namespace App\ducks;


use App\flyies\TopFly;
use App\sounds\KraSound;

class WildDuck extends Duck
{
    public function fly(): string
    {
        $fly = new TopFly;
        return $fly->fly();
    }
    public function sound(): string
    {
        $sound = new KraSound;
        return $sound->sound();
    }
}