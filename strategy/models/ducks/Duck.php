<?php
require_once('models/interfaces/FlyInterface.php');
require_once('models/interfaces/SoundInterface.php');
abstract class Duck implements FlyInterface, SoundInterface
{

    function __construct()
    {
        echo 'dzien dobry, będę kaczką! Tylko jaką ?<br>';
    }
}