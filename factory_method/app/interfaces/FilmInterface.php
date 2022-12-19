<?php

namespace App\interfaces;

interface FilmInterface
{
    public function getInfo(): string;
    public function getTime(): int;
}