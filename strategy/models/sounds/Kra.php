<?php
require_once 'models/interfaces/SoundInterface.php';

class KraSound implements SoundInterface
{
    public function sound(): string
    {
        return "kra!!!";
    }
}