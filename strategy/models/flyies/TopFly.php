<?php
require_once 'models/interfaces/FlyInterface.php';

class TopFly implements FlyInterface
{
    public function fly(): string
    {
        return "wzium High!!!";
    }
}