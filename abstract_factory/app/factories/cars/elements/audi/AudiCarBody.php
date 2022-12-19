<?php

namespace App\Factories\cars\elements\audi;

use App\factories\cars\interfaces\CarBodyInterface;

class AudiCarBody implements CarBodyInterface
{
    public function getCarBody(): string
    {
        return 'Red with big doors';
    }
}