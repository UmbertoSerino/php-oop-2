<?php

class PetBed extends Product
{
    protected $size;


    public function __construct(string $_nameProduct, Category $_category, float $_price, string $_imageUrl, string $_description, int $_quantity, string $_size)
    {
        // argomento padre
        parent::__construct($_nameProduct, $_category, $_price, $_imageUrl, $_description, $_quantity);
        $this->size = $_size;
    }

    public function getSize()
    {
        return $this->size;
    }
    public function getAdditionalInfo()
    {
        return 'Dimensioni Cucce / Lettini: ' . $this->size;
    }
}
