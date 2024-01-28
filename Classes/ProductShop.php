<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/PetBed.php';
require_once __DIR__ . '/PetBed.php';

// PetBed.php
$petBedList = [
    $petBedDog_1 = new PetBed('Puppy Buddy-Cuccia', $categoryDog_1, '54.90', 'https://m.media-amazon.com/images/I/71p4HgctzCL.jpg', 'Dormire beati, è soltato il principio', '8x8'),
    $petBedDog_2 = new PetBed('CAGNOLINI e sofà, qua ce fai sognà', $categoryDog_2, 25.90, 'https://img.fruugo.com/product/5/62/784116625_max.jpg', 'Tutto lo spazio disponibile, lo ha il tuo cane', '6x5'),
    $petBedCat_1 = new PetBed('XIAMPIA cuccia per Gatti', $categoryCat_1, '180.756', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQwuhvkj0BjHsUMBxu32mdsJ2z4qUTWBCGadjXchU33X4lTZ4R22zAPo_ZVk2flyFRxlI&usqp=CAU', 'Casa vacanze per gatti che vogliono vivere da soli', '150x75'),
    $petBedCat_2 = new PetBed('Metal Gear Bed per Gatti', $categoryCat_2, '30.99', 'https://www.rippotai.it/cdn/shop/products/Rippotai-cuccia-blackpotai-amb1-2048_1800x1800.jpg?v=1662556639', 'Per introdursi facilmente a Shadow Moses', '40x60'),
];
// FoodProduct
$FoodPetList = [
    $foodPetDog_1 = new Food('Pedigree Snack', $categoryDog_1, '15.90', 'https://www.naturepetshop.it/wp-content/uploads/cibo-secco-per-cani-300x215.jpg', 'Il piu\' bel cibo che tu possa dare al tuo miglior cane di sempre', $flavorDog_1),
    $foodPetDog_2 = new Food('Pedigree Snack', $categoryDog_1, '15.90', 'https://www.naturepetshop.it/wp-content/uploads/cibo-secco-per-cani-300x215.jpg', 'Il piu\' bel cibo che tu possa dare al tuo miglior cane di sempre', $flavorDog_1),
    $foodPetCat_1 = new Food('Pedigree Snack', $categoryDog_1, '15.90', 'https://www.naturepetshop.it/wp-content/uploads/cibo-secco-per-cani-300x215.jpg', 'Il piu\' bel cibo che tu possa dare al tuo miglior cane di sempre', $flavorDog_1),
    $foodPetCat_2 = new Food('Pedigree Snack', $categoryDog_1, '15.90', 'https://www.naturepetshop.it/wp-content/uploads/cibo-secco-per-cani-300x215.jpg', 'Il piu\' bel cibo che tu possa dare al tuo miglior cane di sempre', $flavorDog_1),
];
