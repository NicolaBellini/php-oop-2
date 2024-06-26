<?php 

class Food extends Product {

  public $ingredients;
  public $vegan;

  public function __construct(string $_name,float $_price,string $_type, string $_img, array $ingredients, bool $vegan,  float $_discount = 0)
  {
     // Chiamata al costruttore della classe genitore (Product)
    parent::__construct($_name, $_price, $_type, $_img, $_discount);

    // Assegnazione degli altri attributi specifici della classe Food
    $this->ingredients = $ingredients;
    $this->vegan = $vegan;
  }
  

}