<?php
    require_once __DIR__. "/classes/Prodotti.php";
    require_once __DIR__. "/classes/Cibo.php";
    require_once __DIR__. "/classes/Animali.php";
    $production = new Prodotti("Guinzaglio", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpVQhjbmHx2_OHWwy137aJlmBAUz99qlOp_UVqJfR58wg4geNwlZZ9vcaJC0eFQMJwk_w&usqp=CAU ", 20, "adatto per portare i cani a passeggio");
    $footer = new Cibo("Cibo per animali", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQogGLe6mlZZO6zsTpQXIQy4DnMWt0moJfTdope7Xyd7Vb8xMQwT-Ysbg8js1XksisUAO4&usqp=CAU", 40, "cibo nutriente per i nostri amici a quattro zampe");
    $footer -> setCibo("carne magra");
    $cane = new Categoria("Cane", " icona cane");
    $gatto = new Categoria ("Gatto", "icona gatto");