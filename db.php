<?php 
    require_once __DIR__ . "/classes/Animals.php";
    require_once __DIR__ . "/classes/Products.php";
    require_once __DIR__ . "/classes/Cleaning.php";
    require_once __DIR__ . "/classes/Food.php";
    require_once __DIR__ . "/classes/Toys.php";
    require_once __DIR__ . "/classes/Kennels.php";

    // animali-categorie
    $cat = new Animal("gatto");
    $dog = new Animal("cane");
    
    $products_food = [
        new Food([$dog],"Royal Canin","secco", 20.50, "img", "Manzo", 10.00, 4000, 40, 15, 3, ["glutine, manzo"]),
        new Food([$cat], "Gourmet", "secco", 10.90, "img", "Coniglio", 1.5, 800, 30, 45, 10, ["glutine", "coniglio"]),
        new Food([$cat], "Gourmet", "umido", 2.90, "img", "Salmone", 0.5, 100, 20, 35, 1, ["glutine", "pesce"]),
    ];

    $products_cleaning = [
        new Cleaning([$cat], "Nature Pet", "classic", 10.00, "img", 300, "pelo corto", "miele"),
        new Cleaning([$dog], "Nature Pet", "a secco", 15.30, "img", 500, "pelo lungo", "cocco"),
    ];
?>