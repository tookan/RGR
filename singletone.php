<?php
class connection {
    protected static $instance;
    public static $db;
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    protected function __construct() {
    include_once 'env.php';
            self::$db = new mysqli($host,$user,$pass,$dbname);
            if (mysqli_connect_errno(self::$db)) {
                echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
                exit();
            }

    }
    private function __clone() {
        
    }
    private function __wakeup() {
        
    }
}
