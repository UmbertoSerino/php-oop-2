<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/PetBed.php';
require_once __DIR__ . '/PetBed.php';

// PetBed.php
$productsList = [
    $petBed_1 = new PetBed('Ligo Buddy-Cuccia', $categoryDog_1, 54.90, 'https://m.media-amazon.com/images/I/71p4HgctzCL.jpg', 'ciao anna'),
    $petBed_2 = new PetBed('Cagnolini e sofà, qua ce fai sognà', $categoryDog_1, 54.90, 'https://img.fruugo.com/product/5/62/784116625_max.jpg', 'ciao anna')
];
