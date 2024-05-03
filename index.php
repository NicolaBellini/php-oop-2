<?php
require_once __DIR__.'/Model/Product.php';
require_once __DIR__.'/Model/food.php';
require_once __DIR__.'/Model/Toy.php';
require_once __DIR__.'/DB/Data.php';

// $product = new Product('osso', 7, 'cane');

// $food = new Food('carne', 3,'cane', ['carne','sale', 'verdure'], false);

// $toy = new Toy('corda', 4, 'gatto', ['plastica', 'cotone'], true, 300);

// var_dump($product);
// var_dump($food);
// var_dump($toy);

// Stampa delle informazioni dei prodotti
foreach ($database["products"] as $category => $products) {
    echo strtoupper($category) . ":<br>";
    foreach ($products as $product) {
        echo "-Nome: " . $product["name"] . ", Price: $" . $product["price"] . ", Type: " . $product["type"];
        if (isset($product["material"])) {
            echo ", Material: " . implode(", ", $product["material"]);
        }
        if (isset($product["ecoFriendly"])) {
            echo ", Eco-Friendly: " . ($product["ecoFriendly"] ? "Yes" : "No");
        }
        if (isset($product["weight"])) {
            echo ", Weight: " . $product["weight"];
        }
        if (isset($product["ingredients"])) {
            echo ", Ingredients: " . implode(", ", $product["ingredients"]);
        }
        echo "<br>";
    }
    echo "<br>";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <title>title</title>
</head>
<body>
  


</body>
</html>