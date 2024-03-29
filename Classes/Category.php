<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.

I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria
ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<!-- classe padre, da qui dovremmo iniziare a modellare il prodotto, inserendo il prezzo, il formato del titolo, il formato del prezzo, l'immagine da inserire, descrizione... -->
<!-- potremmo usare tre classi figlie a loro volta, una per cibo, un'altra per giochi e cucce ed un'altra per prodotti per animali  -->

<?php
class Category
{
    public $type;
    public $iconUrl;


    public function __construct(string $_type, string $_iconUrl)
    {
        $this->type = $_type;
        $this->iconUrl = $_iconUrl;
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

$categoryDog = new Category('Cani', 'https://cdn-icons-png.freepik.com/512/91/91544.png');
$categoryCat = new Category('Gatti', 'https://static.thenounproject.com/png/6725-200.png');
?>