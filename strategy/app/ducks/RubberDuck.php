<?php

namespace App\ducks;


use App\flyies\NotFly;
use App\sounds\NotSound;

class RubberDuck extends Duck
{
    public function fly(): string
    {
        $fly = new NotFly;
        return $fly->fly();
    }
    public function sound(): string
    {
        $sound = new NotSound;
        return $sound->sound();
    }
}