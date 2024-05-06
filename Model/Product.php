<?php 
require_once __DIR__.'/Trait/PriceFormatter.php';
class Product{
  use FormattedPrice;
  
  public $name;
  public $price;
  public $type;
  public $img;
  public $discount;



  public function __construct(string $_name,float $_price,string $_type, string $_img, float $_discount = 0)
  {
    $this->name= $_name;
    $this->price= $_price;
    $this->type= $_type;
    $this->img= $_img;
    $this->setDiscount($_discount);
  }


  public function setDiscount(float $discount) {
    
    $this->discount = max(0, min($discount, 1));
  }

  public function getDiscount(){
    return $this->discount;
  }

    // Metodo per ottenere il prezzo scontato formattato
  public function getDiscountedPrice() {
    // Calcola il prezzo scontato
    $discountedPrice = $this->price - ($this->price * $this->discount);
    // Formatta il prezzo scontato utilizzando il metodo del trait
    return $this->formatPrice($discountedPrice);
  }
}


