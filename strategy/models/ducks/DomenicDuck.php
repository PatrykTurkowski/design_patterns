<?php

require_once 'Duck.php';
require_once 'models/sounds/Kwa.php';
require_once 'models/flyies/MidFly.php';
class DomesticDuck extends Duck
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