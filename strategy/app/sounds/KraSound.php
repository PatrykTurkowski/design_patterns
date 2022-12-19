<?php

namespace App\sounds;

use App\interfaces\SoundInterface;

class KraSound implements SoundInterface
{
    public function sound(): string
    {
        return "kra!!!";
    }
}