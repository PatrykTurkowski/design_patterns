<?php

namespace App;

class Weather implements \SplSubject
{
    private $subscribers;

    public $temp;
    public $weather;


    public function __construct()
    {
        $this->subscribers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->subscribers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->subscribers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->subscribers as $observer) {
            $observer->update($this);
        }
    }

    public function someBusinessLogic(): void
    {

        $this->weather = 'sunny';
        $this->temp = 19;

        $this->notify();
    }
}