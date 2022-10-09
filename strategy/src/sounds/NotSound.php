<?php

namespace MyApp\sounds;

use MyApp\interfaces\SoundInterface;

class NotSound implements SoundInterface
{
    public function sound(): string
    {
        return "...";
    }
}