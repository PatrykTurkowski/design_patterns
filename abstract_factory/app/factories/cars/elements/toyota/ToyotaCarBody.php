<?php

namespace App\Factories\cars\elements\toyota;

use App\factories\cars\interfaces\CarBodyInterface;

class ToyotaCarBody implements CarBodyInterface
{
    public function getCarBody(): string
    {
        return 'Blue with small doors';
    }
}