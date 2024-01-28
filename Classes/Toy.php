<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    protected $materialToy;


    public function __construct(string $_nameProduct, Category $_category, float $_price, string $_imageUrl, string $_description, string $_materialToy)
    {
        // argomento padre
        parent::__construct($_nameProduct, $_category, $_price, $_imageUrl, $_description);
        $this->materialToy = $_materialToy;
    }

    public function getMaterial()
    {
        return $this->materialToy;
    }
}
$material = [
    $material_1 = 'Acciaio',
    $material_2 = 'Plastica',
    $material_3 = 'Ferro',
    $material_4 = 'Cotone',
    $material_5 = 'Adamantio'
];
