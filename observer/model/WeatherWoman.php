<?php

class WeatherWomen implements SplObserver
{
    public function __construct()
    {
        echo "created Observator WeatehrWomen <br>";
    }
    public function update(SplSubject $subject): void
    {
        echo "today will be" . $subject->weather;
        echo " and " . $subject->temp;
    }
}