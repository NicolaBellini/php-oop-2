<?php 

class Toy extends Product{

  private $material;
  public $ecoFriendly;
  public $weight;

  public function __construct(string $_name,float $_price,string $_type, string $_img, array $_material, bool $_ecoFriendly, float $_weight)
  {
     parent::__construct($_name, $_price, $_type, $_img);
    
     $this-> setMaterial($_material);
     $this->ecoFriendly= $_ecoFriendly;
     $this->weight= $_weight;

  }


  public function setMaterial($_material){
    if(empty($_material)){
      throw new Exception('i materiali non sono adeguati');
    }else{
      $this->material = $_material;
    }
  }

  public function getMaterial(){
    return $this->material;
  }
}