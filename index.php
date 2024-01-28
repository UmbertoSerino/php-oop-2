<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria
ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->
<?php
require_once __DIR__ . '/Classes/Product.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <!-- Bootstrap Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- My Style -->
    <link rel="stylesheet" href="./style/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<body>
    <header>

    </header>
    <main>
        <article class="container">
            <div class="row">
                <!-- start foreach product -->
                <?php foreach ($listProduct as $product) { ?>
                <div class="col-3 mb-5">
                    <div class="card col-6" style="width: 18rem;">
                        <img src=" <?php echo $product->imageUrl ?> " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getNameProduct() ?></h5>
                            <p class="card-text">Descrizione: <?php echo $product->getDescription() ?></p>
                            <p class="card-text">Prezzo: <?php echo $product->getPrice() ?>&euro;</p>
                            <p class="card-text">Adatto per: <?php echo $product->getCategory()->getType() ?></p>
                            <!-- additional category: condition Toys -->
                            <?php if (is_a($product, 'Toy')) { ?>
                            <p class="card-text">Tipo di Materiale: <?php echo $product->getMaterial() ?></p>
                            <!-- additional category: condition Food -->
                            <?php } elseif (is_a($product, 'Food')) { ?>
                            <p class="card-text">Gusto: <?php echo $product->getTypeOfFlavor() ?></p>
                            <!-- additional category: condition PetBed -->
                            <?php } elseif (is_A($product, 'petBed')) { ?>
                            <p class="card-text">Dimensioni: <?php echo $product->getSize() ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </article>
    </main>
</body>

</html>