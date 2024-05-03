<?php 

class Toy extends Product{

  public $material;
  public $ecoFriendly;
  public $weight;

  public function __construct(string $_name,int $_price,string $_type, array $_material, bool $_ecoFriendly, float $_weight)
  {
     parent::__construct($_name, $_price, $_type);
    
     $this->material= $_material;
     $this->ecoFriendly= $_ecoFriendly;
     $this->weight= $_weight;

  }

}