<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/AdditionalInfo.php';


class Food extends Product
{
    use AdditionalInfo;

    public $typeOfFlavor;
    public $fats;
    public $carbs;
    public $proteins;
    protected $calories;



    public function __construct(string $_nameProduct, Category $_category, float $_price, string $_imageUrl, string $_description, int $_quantity, string $_typeOfFlavor, int $_fats, int $_carbs, int $_proteins)
    {
        // argomento padre
        parent::__construct($_nameProduct, $_category, $_price, $_imageUrl, $_description, $_quantity);
        $this->typeOfFlavor = $_typeOfFlavor;
        $this->fats = $_fats;
        $this->carbs = $_carbs;
        $this->proteins = $_proteins;
        $this->setCalories($_fats, $_carbs, $_proteins);
    }

    public function getTypeOfFlavor()
    {
        return $this->typeOfFlavor;
    }
    public function getCalories()
    {
        return $this->calories;
    }
    public function setCalories($_fats, $_carbs, $_proteins)
    {

        $this->calories = ($_fats * 9) + ($_carbs + $_proteins) * 4;
    }
    public function getAdditionalInfo()
    {
        return 'Gusto: ' . $this->typeOfFlavor . ', ' . 'Grassi: ' .  $this->fats . 'g, ' . 'Carboidrati: ' . $this->carbs . 'g, ' . 'Proteine' . $this->proteins . 'g, ' . 'Calorie: ' . $this->calories;
    }
}
