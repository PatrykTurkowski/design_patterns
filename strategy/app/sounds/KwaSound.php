<?php

namespace App\sounds;

use App\interfaces\SoundInterface;

class KwaSound implements SoundInterface
{
    public function sound(): string
    {
        return "kwa!!!";
    }
}