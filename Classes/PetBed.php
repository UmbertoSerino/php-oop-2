<?php
require_once __DIR__ . '/Product.php';

class PetBed extends Product
{
    protected $size;


    public function __construct(string $_nameProduct, Category $_category, float $_price, string $_imageUrl, string $_description, string $_size)
    {
        // argomento padre
        parent::__construct($_nameProduct, $_category, $_price, $_imageUrl, $_description);
        $this->size = $_size;
    }

    public function getSize()
    {
        return $this->size;
    }
}
