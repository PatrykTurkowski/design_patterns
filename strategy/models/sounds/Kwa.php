<?php
require_once 'models/interfaces/SoundInterface.php';

class KwaSound implements SoundInterface
{
    public function sound(): string
    {
        return "kwa!!!";
    }
}