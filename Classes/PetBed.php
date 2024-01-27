<?php
require_once __DIR__ . '/Product.php';

class PetBed extends Product
{
    protected $namePetProduct;



    public function setNamePetProduct(string $namePetProduct)
    {
        $this->namePetProduct = $namePetProduct;
    }

    public function getsetNamePetProduct()
    {
        return $this->namePetProduct;
    }
}
