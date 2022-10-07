<?php
require_once 'models/interfaces/SoundInterface.php';

class NotSound implements SoundInterface
{
    public function sound(): string
    {
        return "...";
    }
}