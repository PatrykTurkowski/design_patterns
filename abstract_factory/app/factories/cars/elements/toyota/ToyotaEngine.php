<?php

namespace App\Factories\cars\elements\toyota;

use App\factories\cars\interfaces\EngineInterface;

class ToyotaEngine implements EngineInterface
{
    public function getEngine(): string
    {
        return 'internal combustion';
    }
}