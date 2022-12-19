<?php


namespace App\Factories\cars\elements\audi;

use App\factories\cars\interfaces\TireInterface;

class AudiTire implements TireInterface
{
    public function getTire(): string
    {
        return 'Big';
    }
}