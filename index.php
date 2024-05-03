<?php
require_once __DIR__.'/Model/Product.php';
require_once __DIR__.'/Model/food.php';
require_once __DIR__.'/Model/Toy.php';
require_once __DIR__.'/DB/Data.php';



$formattedToys = [];
$formattedFoods = [];


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
            $formattedFoods[] = $food;
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
            $formattedToys[] = $toy;
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

  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <link rel="stylesheet" href="assets/style.css">
  
  <title>title</title>
</head>

<body>

<div class="container d-flex flex-wrap p-3 justify-content-center">
  <h2>TOYS</h2>
  <!-- div toys -->

  
  
    

      
     <div class="swiper mySwiper">
      <div class="swiper-wrapper">
         <?php foreach($formattedToys as $product): ?>

          <div class="swiper-slide">
          <div class="card  my_card" style="width: 18rem;">
      <img src="<?php echo $product->img ?>" class="card-img-top h-50 my_img" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $product->name; ?></h5>
        <p class="card-text">
          <?php echo "Price: $" . $product->price . "<br>"; ?>
          <?php echo "Type: " . $product->type . "<br>"; ?>
          <?php echo "Material: " . implode(", ", $product->material) . "<br>"; ?>
          <?php echo "Eco-Friendly: " . ($product->ecoFriendly ? "Yes" : "No") . "<br>"; ?>
          <?php echo "Weight: " . $product->weight . "<br>"; ?>
        </p>
      </div>
    </div>
          </div>
        
   <?php endforeach ?>
      </div>
      
    </div>


    



  <H2>FOODS</H2>
  <!-- div foods -->

   
     <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php foreach($formattedFoods as $product): ?>

          <div class="swiper-slide">
                <div class="card  my_card" style="width: 18rem;">
              <img src="<?php echo $product->img ?>" class="card-img-top h-50 my_img" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $product->name; ?></h5>
                <p class="card-text">
                  <?php echo "Price: $" . $product->price . "<br>"; ?>
                  <?php echo "Type: " . $product->type . "<br>"; ?>
                  <?php echo "Ingredients: " . implode(", ", $product->ingredients) . "<br>"; ?>
                  <?php echo "Vegan: " . ($product->vegan ? "Yes" : "No") . "<br>"; ?>
                </p>
              </div>
            </div>
          </div>
        
        <?php endforeach ?>
      </div>
      
    </div>


  


 
    
       

  
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 1.8,
      spaceBetween: 30,

     
    });
  </script>



</body>
</html>