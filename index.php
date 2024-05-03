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


$formattedProducts = [];

foreach ($products as $category => $categoryProducts) {
    foreach ($categoryProducts as $product) {
        if ($category === "foods") {
            // Creazione di un oggetto Food
            $food = new Food(
                $product["name"],
                $product["price"],
                $product["type"],
                $product['img'],
                $product["ingredients"],
                $product["vegan"],

            );

            // Aggiunta dell'oggetto Food all'array $formattedProducts
            $formattedProducts[] = $food;
        } elseif ($category === "toys") {
            // Creazione di un oggetto Toy
            $toy = new Toy(
                $product["name"],
                $product["price"],
                $product["type"],
                $product['img'],
                $product["material"],
                $product["ecoFriendly"],
                $product["weight"]
            );

            // Aggiunta dell'oggetto Toy all'array $formattedProducts
            $formattedProducts[] = $toy;
        }
    }
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

<div class="container d-flex flex-wrap p-3 justify-content-center">
  <?php foreach($formattedProducts as $product): ?>
    <div class="card" style="width: 18rem;">
      <img src="<?php echo $product->img ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $product->name; ?></h5>
        <p class="card-text">
          <?php echo "Price: $" . $product->price . "<br>"; ?>
          <?php echo "Type: " . $product->type . "<br>"; ?>
          <?php if ($product instanceof Toy): ?>
           <?php echo "Material: " . implode(", ", $product->material) . "<br>"; ?>

            <?php echo "Eco-Friendly: " . ($product->ecoFriendly ? "Yes" : "No") . "<br>"; ?>
            <?php echo "Weight: " . $product->weight . "<br>"; ?>
          <?php elseif ($product instanceof Food): ?>
            <?php echo "Ingredients: " . implode(", ", $product->ingredients) . "<br>"; ?>
            <?php echo "Vegan: " . ($product->vegan ? "Yes" : "No") . "<br>"; ?>
          <?php endif; ?>
        </p>
      </div>
    </div>
  <?php endforeach ?>
</div>



</body>
</html>