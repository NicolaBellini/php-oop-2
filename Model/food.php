<?php 

class Food extends Product {

  public $ingredients;
  public $vegan;

  public function __construct(string $_name,int $_price,string $_type, array $ingredients, bool $vegan)
  {
     // Chiamata al costruttore della classe genitore (Product)
    parent::__construct($_name, $_price, $_type);

    // Assegnazione degli altri attributi specifici della classe Food
    $this->ingredients = $ingredients;
    $this->vegan = $vegan;
  }
  

}