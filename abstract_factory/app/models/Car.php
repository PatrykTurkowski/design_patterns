<?php

namespace App\models;

use App\factories\cars\interfaces\CarFactoryInterface;

class Car
{

    public function create(CarFactoryInterface $factory)
    {
        $car = $factory->createCar();



        return $car;
    }
}