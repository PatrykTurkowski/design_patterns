<?php

namespace App\factories;

use App\models\AdventureBook;
use App\models\BusinessBook;
use InvalidArgumentException;



class BookFactory
{
    public static function create($type, string $author, string $title)
    {
        switch ($type) {
            case 'business':
                return new BusinessBook($author, $title);
            case 'adventure':
                return new AdventureBook($author, $title);

            default:
                throw new InvalidArgumentException($type . "is not a valid type!");
        }
    }
}