<?php 

class Product{

  public $name;
  public $price;
  public $type;

  public function __construct(string $_name,int $_price,string $_type)
  {
    $this->name= $_name;
    $this->price= $_price;
    $this->type= $_type;
  }

  public function getProductInfo(){
    return "$this->name,$this->price,$this->type,";
  }

}