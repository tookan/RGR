<?php
include 'singletone.php';

class login_control
{
    public $login;
    public $pass;
    public $passHashed;
    public $checked;
    public static $db;

    public function __construct($log = NULL, $pas = NULL)
    {
        $this->login = $log;
        $this->pass = $pas;
        if ($this->login != NULL && $this->pass != NULL) $this->check();
        else include_once $_SERVER['DOCUMENT_ROOT'] . '/html/login_form.php';
    }

    public function check()
    {
        self::$db = singletone::getInstance();
        $ch = self::$db->con->prepare("SELECT pwd FROM users WHERE login='$this->login' ");
        $ch->execute();
        $this->passHashed = $ch->fetch();
        if ($this->passHashed) {
            if (password_verify($this->pass, $this->passHashed['pwd'])) {
                $this->checked = true;
            } else {
                $this->checked = NULL;
                echo 'Wrong password';
            }
        }else echo 'Wrong username </br>';
    }
    public function cookiesSet()
    {
        setcookie('login', $this->login, time() + 3600, "/");
        setcookie('pass', $this->pass, time() + 3600,"/");
    }
}