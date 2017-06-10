<?php

require_once 'podkluchenie.php';
class tovarBD{
    public $bd;
    public function __construct()
    {
        podkluchenie::connect();
        $this->bd=podkluchenie::$podkl;
    }
    
    public function downloadtovar(){
        require_once 'tovar.php';
        $req="SELECT * FROM tovar";
        $res=$this->bd->query($req);
        $i=0;
            while ($data= $res->fetch_object('tovar')){
                $tovar[$i]=$data;
                $i++;
            }
            return $tovar;
        }
    public function addtovar($tovar){
        
        $req="INSERT INTO tovar(`name`, `description`, `quantity`, `price`) 
        VALUES ('$tovar->name', '$tovar->description',$tovar->quantity,$tovar->price)";
       if ($this->bd->query($req)){
            echo "New goods added!";
        }
    }
        public function deletetovar($name){
            $req="DELETE FROM tovar WHERE name='$name'";
         
            if ($this->bd->query($req)){
                echo "Deleted succesfully";
            }else echo "Can't delete this";
            
        }
    
    
}