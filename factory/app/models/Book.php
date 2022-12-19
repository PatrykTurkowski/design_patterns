<?php

namespace App\models;

class Book
{
    private string $author;
    private string $title;

    /**
     * __construct
     *
     * @param  mixed $author
     * @param  mixed $title
     * @return void
     */
    public function __construct(string $author, string $title)
    {
        $this->author = $author;
        $this->title = $title;
    }
    public function getInfo(): string
    {
        return 'Autor: ' . $this->author . " Title: " . $this->title . "</br>";
    }
}