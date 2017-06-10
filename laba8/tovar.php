<?php

 class tovar{
    private $id;
    public $name;
    public $description;
    public $quantity;
     public $price;

     public function getId(){
         return $this->id;
     }
     public function setId($id){
         $this->id= $id;
     }
}