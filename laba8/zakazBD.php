<?php
require_once 'podkluchenie.php';

class  zakazBD{
    public $bd;
    public function __construct()
    {
        podkluchenie::connect();
        $this->bd=podkluchenie::$podkl;
    }
    public function poiskZakazov(){
        $req="SELECT orders FROM zakaz";
  
        $res=$this->bd->query($req);
        $i=0;
        while ($data= $res->fetch_assoc()){
            $zakaz[$i]=$data['orders'];
            $i++;
        }
        
       // $zakaz=json_encode($zakaz,JSON_UNESCAPED_UNICODE);
return $zakaz;
    }
    
}