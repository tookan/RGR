<?php
class podkluchenie {
    protected static $instance;
    public static $podkl;
    
    public static function connect() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    protected function __construct() {
        include_once 'pas.php';
        self::$podkl = new mysqli($host,$user,$password,$user);
        if(mysqli_connect_errno(self::$podkl)) echo 'Achtung!';
    }
    private function __clone() {

    }
    private function __wakeup() {

    }
}
