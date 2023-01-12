<?php
    require_once __DIR__. "/classes/Prodotti.php";
    require_once __DIR__. "/classes/Cibo.php";
    require_once __DIR__. "/classes/Animali.php";
    require_once __DIR__. "/classes/Giochi.php";
    $cane = new Categoria("Cane", " icona cane");
    $gatto = new Categoria ("Gatto", "icona gatto");
    $production = new Prodotti("Guinzaglio", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpVQhjbmHx2_OHWwy137aJlmBAUz99qlOp_UVqJfR58wg4geNwlZZ9vcaJC0eFQMJwk_w&usqp=CAU ", 20, "adatto per portare i cani a passeggio", $cane);
    $footer = new Cibo("Cibo per animali", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQogGLe6mlZZO6zsTpQXIQy4DnMWt0moJfTdope7Xyd7Vb8xMQwT-Ysbg8js1XksisUAO4&usqp=CAU", 40, "cibo nutriente per i nostri amici a quattro zampe", $gatto);
    $footer -> setCibo("carne magra");
    $game = new Gioco("Gioco per la salute dei denti", "https://www.google.com/aclk?sa=l&ai=DChcSEwiYr4z408D8AhWawXcKHbwzDuMYABAJGgJlZg&sig=AOD64_1QT5Ce4MtMSLZ8ZI2_FqdOUYoP9A&adurl&ctype=5&ved=2ahUKEwjCgYL408D8AhXsmycCHRfMAjUQvhd6BAgBEHU", 40, " osso adatto per la salute dei denti", $cane);
    $game -> setGame("plastica");

    $prodotti = [
        $production,
        $footer
    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shiop Animali</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="my-3">Negozio per i tuoi amici a 4 zampe</h1>
            <div class="row">
                <?php foreach($prodotti as $production) { ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $production -> getImage() ?> " class="card-img-top" alt="<?php echo $production -> getName()?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $production -> getName()?></h5>
                            <p class="card-text"><?php echo $production -> getUtility()?></p>
                            <p class="card-text">Compra a soli <?php echo $production -> getPrice()?>€</p>
                            <a href="#" class="btn btn-primary">METTI NEL CARELLO</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>