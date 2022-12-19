<?php


namespace App\Factories\cars\elements\audi;

use App\Factories\cars\elements\BaseCarAbstract;

class AudiCar extends BaseCarAbstract
{
    public function getCar(): string
    {
        return 'Engine: ' . $this->engine->getEngine() . '</ br> Car Body: ' . $this->carBody->getCarBody() . '</ br> Tire: ' . $this->tire->getTire();
    }
}