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
        self::$podkl = new mysqli('mpanovam.ho.ua','mpanovam','16253444','mpanovam');
        if (mysqli_connect_errno(self::$podkl)) {
            echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
            exit();
        }
    }
    private function __clone() {

    }
    private function __wakeup() {

    }
}
