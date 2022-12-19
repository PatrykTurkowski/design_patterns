<?php

namespace App\Factories\cars\types;

use App\Factories\cars\elements\toyota\ToyotaCar;
use App\Factories\cars\elements\toyota\ToyotaCarBody;
use App\Factories\cars\elements\toyota\ToyotaEngine;
use App\Factories\cars\elements\toyota\ToyotaTire;
use App\factories\cars\interfaces\CarBodyInterface;
use App\factories\cars\interfaces\CarFactoryInterface;
use App\factories\cars\interfaces\CarInterface;
use App\factories\cars\interfaces\EngineInterface;
use App\factories\cars\interfaces\TireInterface;

class ToyotaFactory implements CarFactoryInterface
{
    public function createEngine(): EngineInterface
    {
        return new ToyotaEngine();
    }

    public function createCarBody(): CarBodyInterface
    {
        return new ToyotaCarBody();
    }

    public function createTire(): TireInterface
    {
        return new ToyotaTire();
    }
    public function createCar(): CarInterface
    {
        return new ToyotaCar($this->createEngine(), $this->createCarBody(), $this->createTire());
    }
}