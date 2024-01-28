<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Toy.php';
require_once __DIR__ . '/PetBed.php';

// PetBed.php


$petBedList = [
    $petBedDog_1 = new PetBed('Puppy Buddy-Cuccia', $categorieDog[0], '54.90', 'https://m.media-amazon.com/images/I/71p4HgctzCL.jpg', 'Dormire beati, è soltato il principio', '8x8'),
    $petBedDog_2 = new PetBed('CAGNOLINI e sofà, qua ce fai sognà', $categorieDog[1], 25.90, 'https://img.fruugo.com/product/5/62/784116625_max.jpg', 'Tutto lo spazio disponibile, lo ha il tuo cane', '6x5'),
    $petBedCat_1 = new PetBed('XIAMPIA cuccia per Gatti', $categorieCat[0], '180.756', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQwuhvkj0BjHsUMBxu32mdsJ2z4qUTWBCGadjXchU33X4lTZ4R22zAPo_ZVk2flyFRxlI&usqp=CAU', 'Casa vacanze per gatti che vogliono vivere da soli', '150x75'),
    $petBedCat_2 = new PetBed('Metal Gear Bed per Gatti', $categorieCat[1], '30.99', 'https://www.rippotai.it/cdn/shop/products/Rippotai-cuccia-blackpotai-amb1-2048_1800x1800.jpg?v=1662556639', 'Per introdursi facilmente a Shadow Moses', '40x60'),
];
// FoodProduct
$foodPetList = [
    $foodPetDog_1 = new Food('Piedi di gree Snack', $categoryDog_1, '15.90', 'https://www.naturepetshop.it/wp-content/uploads/cibo-secco-per-cani-300x215.jpg', 'Il piu\' bel cibo che tu possa dare al tuo miglior cane di sempre', $flavor_1),
    $foodPetDog_2 = new Food('Royal Carinin', $categoryDog_1, '5.90', 'https://www.razzedicani.net/wp-content/uploads/2023/08/crocchette-cani.jpg', 'Ancora più cibo per il bel cane', $flavor_2),
    $foodPetCat_1 = new Food('PerfarovLife', $categoryCat_1, '12.90', 'https://www.nonsprecare.it/wp-content/uploads/2016/11/cibo-per-gatti-fai-da-te-sano-e-low-cost-3.jpg', 'Sempre con canireria ', $flavor_3),
    $foodPetCat_2 = new Food('Acuna Matata', $categoryCat_2, '15.00', 'https://petadvisor.it/wp-content/uploads/2022/01/cibo-gatti-un.jpg', 'Non vorrà più farne a meno', $flavor_2),
];
// ToyProduct

$toyPetList = [
    $toyPetDog_1 = new Toy('Buzz Soundtrack', $categoryDog_2, '35.90', 'https://cdn.manomano.com/images/images_products/19862836/P/36248171_1.jpg', 'Fai giocare il tuo cane facendogli usare le colonne sonore dei più grandi film mai girati su questa terra', $material_1),
    $toyPetDog_2 = new Toy('Grande Dog Toy Rope', $categoryDog_1, '1.90', 'https://iperverde.it/cdn/shop/products/gioco-con-corda-per-cani.jpg?v=1607510608', 'Fai in modo che il tuo cane ti voglia bene', $material_4),
    $toyPetCat_1 = new Toy('Super Gioco per Gatti', $categoryCat_1, '82.90', 'https://m.media-amazon.com/images/I/71aH+To-f3L._AC_UF894,1000_QL80_.jpg', 'Il tuo gatto sarà come stupirti', $material_5),
    $toyPetCat_2 = new Toy('Raggio Laser oscuro', $categoryCat_2, '5.00', 'https://www.ilgrandebazar.it/cdn/shop/products/41oK55nkCJL_500x.jpg?v=1583401999', 'Apprezza il lato oscuro della forza', $material_1),

];
