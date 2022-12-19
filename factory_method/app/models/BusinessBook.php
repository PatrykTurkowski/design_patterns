<?php

namespace App\models;

use App\interfaces\BookInterface;

class BusinessBook implements BookInterface
{
    const TYPE = 'Business';
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
        return 'Autor: ' . $this->author . " Title: " . $this->title . " Type: " . self::TYPE . "</br>";
    }
}