<?php

namespace MyApp\ducks;


use MyApp\flyies\NotFly;
use MyApp\sounds\NotSound;

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