<?php 

class Product{

  public $name;
  public $price;
  public $type;
  public $img;

  public function __construct(string $_name,float $_price,string $_type, string $_img)
  {
    $this->name= $_name;
    $this->price= $_price;
    $this->type= $_type;
    $this->img= $_img;
  }

  public function getProductInfo(){
    return "$this->name,$this->price,$this->type";
  }

}