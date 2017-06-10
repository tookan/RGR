<?php
require_once 'podkluchenie.php';

class  zakazBD{
    public $bd;
    public function __construct()
    {
        podkluchenie::connect();
        $this->bd=podkluchenie::$podkl;
    }
    public function poiskZakazov($orders){
        $req="SELECT DISTINCT orders FROM zakaz WHERE orders LIKE '%".$orders."%' ";
        $res=$this->bd->query($req);
        $i=0;
        while ($data= $res->fetch_assoc()){
            $zakaz[$i]=$data['orders'];
            $i++;
        }
return $zakaz;
    }
    public function  vyvodZakazov($orders){
    $req= "SELECT * FROM zakaz WHERE orders LIKE '$orders'  ";
        $res=$this->bd->query($req);
        $i=0;
        while ($data= $res->fetch_object()){
            $zakaz[$i]=$data;
            $i++;
        }
        return $zakaz;
}
    
}