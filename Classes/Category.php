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
}

$categorieDog = [
    $categoryDog_1 = new Category('Dog', 'German Shepherd', 'Adult'),
    $categoryDog_2 = new Category('Dog', 'Bulldog', 'Puppy')
];

$categorieCat = [
    $categoryCat_1 = new Category('Cat', 'Maine Coon', 'Adult'),
    $categoryCat_2 = new Category('Cat', 'Ragdoll', 'Puppy'),
];
?>