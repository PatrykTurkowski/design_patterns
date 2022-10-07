<?php
require_once 'models/interfaces/FlyInterface.php';

class MidFly implements FlyInterface
{
    public function fly(): string
    {
        return "mrał mid!!!";
    }
}