<?php

namespace MyApp\ducks;

use MyApp\flyies\MidFly;
use MyApp\sounds\KwaSound;


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