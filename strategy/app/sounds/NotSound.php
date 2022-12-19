<?php

namespace App\sounds;

use App\interfaces\SoundInterface;

class NotSound implements SoundInterface
{
    public function sound(): string
    {
        return "...";
    }
}