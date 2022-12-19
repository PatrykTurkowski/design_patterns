<?php

namespace App\factories\cars\interfaces;

interface CarFactoryInterface
{
    public function createEngine(): EngineInterface;
    public function createCarBody(): CarBodyInterface;
    public function createTire(): TireInterface;
    public function createCar(): CarInterface;
}