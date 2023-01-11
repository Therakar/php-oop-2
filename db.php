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
        new Food([$dog],"Royal Canin","secco", 20.50, "img", "Manzo", 10.00, 4000, 40, 15, 3),
        new Food([$cat], "Gourmet", "secco", 10.90, "img", "Coniglio", 1.5, 800, 30, 45, 10),
        new Food([$cat], "Gourmet", "umido", 2.90, "img", "Salmone", 0.5, 100, 20, 35, 1),
    ];

    $products_cleaning = [
        new Cleaning([$cat], "Nature Pet", "classic", 10.00, "img", 300, "pelo corto", "miele"),
        new Cleaning([$dog], "Nature Pet", "a secco", 15.30, "img", 500, "pelo lungo", "cocco"),
    ];

    $products_toys = [
        new Toys([$cat], "CatGames", "gomitolo", 5.00, "img", "spago"),
        new Toys([$dog], "DogGames", "osso di gomma", 10.00, "img", "gomma")
    ];

    $products_kennel = [
        new Kennel([$cat], "petSleep", "amaca per animali", 50.00, "img", "stoffa"),
        new Kennel([$dog], "petSleep", "cuscino per animali", 25.00, "img", "stoffa")
    ]
?>