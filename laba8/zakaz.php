<?php

class zakaz{
    private $id;
    public $date;
    public $orders;
    public $status;

    public function getID(){
        return $this->id;
    }
    public function setID($id){
        $this->id= $id;
    }
}