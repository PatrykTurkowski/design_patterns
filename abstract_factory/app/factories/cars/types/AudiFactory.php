<?php

namespace App\Factories\cars\types;

use App\Factories\cars\elements\audi\AudiCar;
use App\Factories\cars\elements\audi\AudiCarBody;
use App\Factories\cars\elements\audi\AudiEngine;
use App\Factories\cars\elements\audi\AudiTire;
use App\factories\cars\interfaces\CarBodyInterface;
use App\factories\cars\interfaces\CarFactoryInterface;
use App\factories\cars\interfaces\CarInterface;
use App\factories\cars\interfaces\EngineInterface;
use App\factories\cars\interfaces\TireInterface;

class AudiFactory implements CarFactoryInterface
{
    public function createEngine(): EngineInterface
    {
        return new AudiEngine();
    }

    public function createCarBody(): CarBodyInterface
    {
        return new AudiCarBody();
    }

    public function createTire(): TireInterface
    {
        return new AudiTire();
    }
    public function createCar(): CarInterface
    {
        return new AudiCar($this->createEngine(), $this->createCarBody(), $this->createTire());
    }
}