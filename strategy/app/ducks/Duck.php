<?php

namespace App\ducks;

use App\interfaces\SoundInterface;
use App\interfaces\FlyInterface;



abstract class Duck implements FlyInterface, SoundInterface
{

    function __construct()
    {
        echo 'dzien dobry, będę kaczką! Tylko jaką ?<br>';
    }
}