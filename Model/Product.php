<?php 

class Product{

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
     $this->discount = $_discount;
  }


  public function setDiscount(float $discount) {
    
    $this->discount = max(0, min($discount, 1));
  }

  public function getDiscount(){
    return $this->discount;
  }

  public function getProductInfo(){
    return "$this->name,$this->price,$this->type";
  }

}