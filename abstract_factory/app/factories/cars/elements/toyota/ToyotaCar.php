<?php


namespace App\Factories\cars\elements\toyota;

use App\Factories\cars\elements\BaseCarAbstract;

class ToyotaCar extends BaseCarAbstract
{
    public function getCar(): string
    {
        return 'Engine: ' . $this->engine->getEngine() . '</ br> Car Body: ' . $this->carBody->getCarBody() . '</ br> Tire: ' . $this->tire->getTire();
    }
}