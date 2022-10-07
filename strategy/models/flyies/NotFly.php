<?php
require_once 'models/interfaces/FlyInterface.php';

class NotFly implements FlyInterface
{
    public function fly(): string
    {
        return ":c";
    }
}