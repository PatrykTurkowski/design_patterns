<?php

namespace MyApp\sounds;

use MyApp\interfaces\SoundInterface;

class KraSound implements SoundInterface
{
    public function sound(): string
    {
        return "kra!!!";
    }
}