
<?php 
    require_once __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pet Shop</title>
</head>
<body>
    <div class="container">
        <h1>Mangime</h1>
        <section id="food">
            
            <?php foreach($products_food as $product) { ?>
                    
                <div class="card">
                    <?php foreach($product->animal as $animal) { ?>
                        <h3>Adatto a:<?php echo ($animal->name) ?>  </h3>
                    <?php } ?>

                    <ul class="no-style">
                        <li><?php echo ($product->image) ?></li>
                        <li>Marca: <?php echo ($product->brand) ?></li>
                        <li>Descrizione: <?php echo ($product->type) ?></li>
                        <li>Prezzo: <?php echo ($product->price) ?> euro</li>
                        <li>Sapore: <?php echo ($product->flavor) ?></li>
                        <li>Calorie: <?php echo ($product->calories) ?> Kcal</li>
                        <li>Proteine: <?php echo ($product->proteins) ?> %</li>
                        <li>Grassi: <?php echo ($product->fats) ?> %</li>
                    </ul>
                </div>

            <?php } ?>
        </section>
<hr>        
        <h1>Pulizia</h1>
        <section id="cleaning">
            <?php foreach($products_cleaning as $product) { ?>
                <div class="card">
                    <?php foreach($product->animal as $animal) { ?>
                        <h3>Adatto a:<?php echo ($animal->name) ?>  </h3>
                    <?php } ?>

                    <ul class="no-style">
                        <li><?php echo ($product->image) ?></li>
                        <li>Marca: <?php echo ($product->brand) ?></li>
                        <li>Descrizione: <?php echo ($product->type) ?></li>
                        <li>Prezzo: <?php echo ($product->price) ?> euro</li>
                        <li> Quantità: <?php echo ($product->quantity) ?>ml</li>
                        <li>Pelo: <?php echo ($product->furType) ?></li>
                        <li>Fragranza: <?php echo ($product->fragrance) ?></li>
                    </ul>
                </div>
            <?php } ?>
        </section>
 <hr>   
        <h1>Cucce</h1>
        <section id="kennels">
            <?php foreach($products_kennel as $product) { ?>
                <div class="card">
                    <?php foreach($product->animal as $animal) { ?>
                        <h3>Adatto a:<?php echo ($animal->name) ?>  </h3>
                    <?php } ?>

                    <ul class="no-style">
                        <li><?php echo ($product->image) ?></li>
                        <li>Marca: <?php echo ($product->brand) ?></li>
                        <li>Descrizione: <?php echo ($product->type) ?></li>
                        <li>Prezzo: <?php echo ($product->price) ?> euro</li>
                        <li>Materiale: <?php echo ($product->material) ?></li>
                    </ul>
                </div>
            <?php } ?>
        </section>
<hr>
        <h1>Giochi</h1>
        <section id="toys">
            <?php foreach($products_toys as $product) { ?>
                <div class="card">
                    <?php foreach($product->animal as $animal) { ?>
                        <h3>Adatto a:<?php echo ($animal->name) ?>  </h3>
                    <?php } ?>

                    <ul class="no-style">
                        <li><?php echo ($product->image) ?></li>
                        <li>Marca: <?php echo ($product->brand) ?></li>
                        <li>Descrizione: <?php echo ($product->type) ?></li>
                        <li>Prezzo: <?php echo ($product->price) ?> euro</li>
                        <li>Materiale: <?php echo ($product->material) ?></li>
                    </ul>
                </div>
            <?php } ?>
        </section>
<hr>

                    
        
    </div>
</body>
</html>