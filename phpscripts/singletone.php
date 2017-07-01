<?php
include_once $_SERVER['DOCUMENT_ROOT']."/crutches/dsn.php";

class singletone
{
   private static $instance=NULL;
    public  $con;

public static function getInstance(){
if(is_null(self::$instance)){
    self::$instance= new self();
}
    return self::$instance;
}
    private function __construct(){
        try {
            $this->con = new PDO ("mysql:host=" . dsn::getHost() . ";dbname=usernames", dsn::getUser(), dsn::getPassword());
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){echo $e->getMessage();}
    }
    private function __clone(){
        
    }
}