<?php
require_once 'Duck.php';
require_once 'models/sounds/Kra.php';
require_once 'models/flyies/TopFly.php';
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