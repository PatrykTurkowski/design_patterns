<?php

namespace MyApp\sounds;

use MyApp\interfaces\SoundInterface;

class KwaSound implements SoundInterface
{
    public function sound(): string
    {
        return "kwa!!!";
    }
}