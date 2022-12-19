<?php

namespace App\factories;

use App\models\AdventureFilm;
use App\models\BusinessFilm;
use InvalidArgumentException;



class FilmFactory
{
    public static function create(string $type, string $author, string $title, int $time)
    {
        switch ($type) {
            case 'business':
                return new BusinessFilm($author, $title, $time);
            case 'adventure':
                return new AdventureFilm($author, $title, $time);

            default:
                throw new InvalidArgumentException($type . "is not a valid type!");
        }
    }
}