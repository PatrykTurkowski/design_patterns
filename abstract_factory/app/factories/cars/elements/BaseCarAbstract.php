<?php

namespace App\Factories\cars\elements;

use App\factories\cars\interfaces\CarBodyInterface;
use App\factories\cars\interfaces\CarInterface;
use App\factories\cars\interfaces\EngineInterface;
use App\factories\cars\interfaces\TireInterface;

abstract class BaseCarAbstract implements CarInterface
{
    protected $engine;
    protected $carBody;
    protected $tire;

    public function __construct(EngineInterface $engine, CarBodyInterface $carBody, TireInterface $tire)
    {
        $this->engine = $engine;
        $this->carBody = $carBody;
        $this->tire = $tire;
    }
}