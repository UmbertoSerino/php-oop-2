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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- My Style -->
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <article class="container">
        <div class="row">
            <?php foreach ($petBedList as $petBed) { ?>
                <div class="col-3">
                    <div class="card col-6" style="width: 18rem;">
                        <img src=" <?php echo $petBed->imageUrl ?> " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $petBed->getNameProduct() ?></h5>
                            <p class="card-text">Descrizione: <?php echo $petBed->getDescription() ?></p>
                            <p class="card-text">Prezzo: <?php echo $petBed->getPrice() ?>&euro;</p>
                            <p class="card-text">Dimensioni: <?php echo $petBed->getSize() ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </article>
</body>

</html>