<?php

class  zakazBD{
    public $bd;
    public function __construct()
    {
        podkluchenie::connect();
        $bd=podkluchenie::$podkl;
    }
    public function poiskZakazov($name){
        $req="SELECT orders, status WHERE orders=$name";
        $res=$this->bd->query($req);
    }


}