<?php


use App\factories\BookFactory;
use App\factories\FilmFactory;

require_once realpath("vendor/autoload.php");


$book1 = BookFactory::create('adventure', 'Mark Twain', 'Przygody Tomka Sawyera');
$book2 = BookFactory::create('business', 'Robert Kiyosaki', 'Bogaty ojciec, biedny ojciec');
$film1 = FilmFactory::create('adventure', 'Mark Twain', 'Przygody Tomka Sawyera', 120);
$film2 = FilmFactory::create('business', 'Robert Kiyosaki', 'Bogaty ojciec, biedny ojciec', 110);

echo $book1->getInfo();
echo $book2->getInfo();
echo $film1->getInfo();
echo $film2->getInfo();
echo $film1->getTime();
echo $film2->getTime();