<?php

namespace App\factories;

use App\models\Book;

class BookFactory
{
    public static function create(string $author, string $title)
    {
        return new Book($author, $title);
    }
}