<?php
require_once 'Duck.php';
require_once 'models/sounds/NotSound.php';
require_once 'models/flyies/NotFly.php';
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