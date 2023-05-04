<?php 

require_once './Models/Product.php';
require_once './Models/Dog_prod.php';
require_once './Models/Cat_prod.php';
require_once './db.php';

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Blinker:wght@400;600&family=Bungee+Inline&family=Emilys+Candy&family=Fjalla+One&family=Fredoka:wght@300;700&family=Gugi&family=Lato:ital@0;1&family=Libre+Baskerville:ital@1&family=Montserrat:wght@400;600&family=Mynerve&family=Mystery+Quest&family=Noto+Sans:wght@400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@400;500&family=Rowdies:wght@300&family=Rubik+Iso&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <title>Animals Shop</title>
</head>

<body>
    <?php include './Views/Partials/Header.php' ?>

    <h1 id="title">Prodotti per animali</h1>

    <div id="container-centered">

        <h2 class="subtitle">Cibo</h2>

        <div class="_container">

            <?php 
            foreach($foods as $food){
            
            ?>
            <div class="card">
                <img   src="<?= $food->image ?>" class="card-img-top" alt="image">
                <div class="card-body">

                    <h5 class="card-title"><?= $food->brand ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <?= $food->type ?> </li>
                        <li class="list-group-item"> <?= $food->getIcon() ?> </li>
                        <li class="list-group-item"><?= $food->description ?> </li>
                        <li class="list-group-item"> <?= $food->getTwoDecimals() . '€' ?> </li>
                    </ul>

                    <a href="#" class="btn btn-primary">Acquista</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>

        <h2 class="subtitle">Giochi</h2>

        <div class="_container">
            
            <?php 
            foreach($games as $game){
            
            ?>
            <div class="card">
                <img   src="<?= $game->image ?>" class="card-img-top" alt="image">
                <div class="card-body">

                    <h5 class="card-title"><?= $game->brand ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <?= $game->type ?> </li>
                        <li class="list-group-item"> <?= $game->getIcon() ?> </li>
                        <li class="list-group-item"><?= $game->description ?> </li>
                        <li class="list-group-item"> <?= $game->getTwoDecimals() . '€' ?> </li>
                    </ul>

                    <a href="#" class="btn btn-primary">Acquista</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>

        <h2 class="subtitle">Relax</h2>
        
        <div class="_container">
            
            <?php 
            foreach($comforts as $comfort){
            
            ?>
            <div class="card">
                <img   src="<?= $comfort->image ?>" class="card-img-top" alt="image">
                <div class="card-body">

                    <h5 class="card-title"><?= $comfort->brand ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <?= $comfort->type ?> </li>
                        <li class="list-group-item"> <?= $comfort->getIcon() ?> </li>
                        <li class="list-group-item"><?= $comfort->description ?> </li>
                        <li class="list-group-item"> <?= $comfort->getTwoDecimals() . '€' ?> </li>
                    </ul>

                    <a href="#" class="btn btn-primary">Acquista</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>

    </div>

    <?php include './Views/Partials/Footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>