<?php

use App\factories\BookFactory;

require_once realpath("vendor/autoload.php");


$book1 = BookFactory::create('Eric Freeman', 'Wzorce projektowe. Rusz głową!');
$book2 = BookFactory::create('Robert Kiyosaki', 'Bogaty ojciec, biedny ojciec');



echo $book1->getInfo();
echo $book2->getInfo();