<?php

namespace App;

class YourWeather implements \SplObserver
{
    public function __construct()
    {
        echo "created Observator YourWeather";
    }
    public function update(\SplSubject $subject): void
    {
        echo "today will be" . $subject->weather;
        echo " and " . $subject->temp;
    }
}