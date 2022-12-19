<?php


namespace App\Factories\cars\elements\audi;

use App\factories\cars\interfaces\EngineInterface;

class AudiEngine implements EngineInterface
{
    public function getEngine(): string
    {
        return 'Electric';
    }
}