<?php
require_once __DIR__ . '/Product.php';
class Food extends Product
{
    protected $typeOfFlavor;


    public function __construct(string $_nameProduct, Category $_category, float $_price, string $_imageUrl, string $_description, string $_typeOfFlavor)
    {
        // argomento padre
        parent::__construct($_nameProduct, $_category, $_price, $_imageUrl, $_description);
        $this->typeOfFlavor = $_typeOfFlavor;
    }

    public function getTypeOfFlavor()
    {
        return $this->typeOfFlavor;
    }
}
$Flavor = [
    $flavorDog_1 = 'Manzo',
    $flavorDog_2 = 'Vitello',
    $flavorDog_3 = 'Maiale',
    $flavorDog_4 = 'Merluzzo',
    $flavorDog_5 = 'Prosciutto'
];
