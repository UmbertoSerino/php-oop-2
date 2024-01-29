<?php
class Food extends Product
{
    protected $typeOfFlavor;


    public function __construct(string $_nameProduct, Category $_category, float $_price, string $_imageUrl, string $_description, int $_quantity, string $_typeOfFlavor)
    {
        // argomento padre
        parent::__construct($_nameProduct, $_category, $_price, $_imageUrl, $_description, $_quantity);
        $this->typeOfFlavor = $_typeOfFlavor;
    }

    public function getTypeOfFlavor()
    {
        return $this->typeOfFlavor;
    }
}
$Flavor = [
    $flavor_1 = 'Manzo',
    $flavor_2 = 'Vitello',
    $flavor_3 = 'Maiale',
    $flavor_4 = 'Merluzzo',
    $flavor_5 = 'Prosciutto'
];
