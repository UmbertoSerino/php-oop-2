<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.

I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria
ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<!-- classe padre, da qui dovremmo iniziare a modellare il prodotto, inserendo il prezzo, il formato del titolo, il formato del prezzo, l'immagine da inserire, descrizione... -->
<!-- potremmo usare tre classi figlie a loro volta, una per cibo, un'altra per giochi e cucce ed un'altra per prodotti per animali  -->

<?php
require_once __DIR__ . '/Product.php';
class Category
{
    protected $type;
    protected $pedigree;
    protected $age;

    public function __construct(string $_type, string $_pedigree = null, string $_age)
    {
        $this->type = $_type;
        $this->pedigree = $_pedigree;
        $this->age = $_age;
    }

    public function setType($_type)
    {
        $this->type = ucfirst(strtolower($_type));
    }
    public function getType()
    {
        return $this->type;
    }
}

$categorieDog = [
    $categoryDog_1 = new Category('Cani', 'Pastore Tedesco', 'Adulto'),
    $categoryDog_2 = new Category('Cani', 'Bulldog', 'Cucciolo')
];

$categorieCat = [
    $categoryCat_1 = new Category('Gatti', 'Maine Coon', 'Adulto'),
    $categoryCat_2 = new Category('Gatti', 'Ragdoll', 'Cucciolo'),
];
?>