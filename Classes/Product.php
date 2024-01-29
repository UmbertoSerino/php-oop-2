<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.

I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria
ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<!-- classe padre, da qui dovremmo iniziare a modellare il prodotto, inserendo il prezzo, il formato del titolo, il formato del prezzo, l'immagine da inserire, descrizione... -->
<!-- potremmo usare tre classi figlie a loro volta, una per cibo, un'altra per giochi e cucce ed un'altra per prodotti per animali  -->

<?php
require_once __DIR__ . '/ProductShop.php';
class Product
{
    public $nameProduct;
    public $category;
    public $price;
    public $imageUrl;
    public $description;
    public $quantity;

    /**
     * fun construct Product
     *
     * @param string $_nameProduct
     * @param Category $_category
     * @param integer $_price
     * @param string $imageUrl
     * @param string $description
     * @param int $quantity
     */
    public function __construct(string $_nameProduct, Category $_category, float $_price, string $_imageUrl, string $_description, int $_quantity)
    {
        $this->nameProduct = $_nameProduct;
        $this->category = $_category;
        $this->price = $_price;
        $this->imageUrl = $_imageUrl;
        $this->description = $_description;
        $this->quantity = $_quantity;
    }
    // Function SET e GET nameProduct

    public function getNameProduct()
    {
        return ucfirst(strtolower($this->nameProduct));
    }
    // Function SET e GET price
    public function setPrice($_price)
    {
        $this->price = (float)$_price;
    }
    public function getPrice()
    {
        return number_format($this->price, 2);
    }
    // Function SET e GET imageURL
    public function setImageUrl($_imageUrl)
    {
        $this->imageUrl = $_imageUrl;
    }

    public function getCategory()
    {
        return $this->category;
    }
    // Function e GET description

    public function getDescription()
    {
        return $this->description;
    }
    // Function SET e GET quantity
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($_quantity)
    {
        if ($_quantity > 0) {
            return $this->quantity;
        } else {
            echo 'La disponibilità è insufficiente';
        }
    }
}
?>