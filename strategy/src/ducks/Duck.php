<?php

namespace MyApp\ducks;

use MyApp\interfaces\SoundInterface;
use MyApp\interfaces\FlyInterface;



abstract class Duck implements FlyInterface, SoundInterface
{

    function __construct()
    {
        echo 'dzien dobry, będę kaczką! Tylko jaką ?<br>';
    }
}