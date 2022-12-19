<?php

namespace App\models;

use App\interfaces\FilmInterface;

class AdventureFilm implements FilmInterface
{
    const TYPE = 'Adventure';
    private string $author;
    private string $title;
    private int $time;

    /**
     * __construct
     *
     * @param  mixed $author
     * @param  mixed $title
     * @return void
     */
    public function __construct(string $author, string $title, int $time)
    {
        $this->author = $author;
        $this->title = $title;
        $this->time = $time;
    }
    public function getInfo(): string
    {
        return 'Autor: ' . $this->author . " Title: " . $this->title . " Type: " . self::TYPE . "</br>";
    }

    public function getTime(): int
    {
        return $this->time;
    }
}