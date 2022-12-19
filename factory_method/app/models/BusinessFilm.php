<?php

namespace App\models;

use App\interfaces\FilmInterface;

class BusinessFilm implements FilmInterface
{
    const TYPE = 'Business';
    private string $author;
    private int $time;
    private string $title;

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