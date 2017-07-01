<?php
include 'singletone.php';

class register_control
{
    public $pwd;
    public $tel;
    public $email;
    public $middle;
    public $last;
    public $first;
    public $login;
    public $salt;

    public function save(){
        $this->hashPwd();
        $db=singletone::getInstance();
        $db->con->exec("INSERT INTO `users`( `email`, `pwd`, `tel`, `first`, `last`, `middle`,  `login`, `salt`) 
        VALUES ('$this->email','$this->pwd',$this->tel,'$this->first','$this->last','$this->middle','$this->login','$this->salt')");
    }

    public function hashPwd(){
        $this->salt=mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
        $hash_options=['cost'=>7,'salt'=>$this->salt];
        $this->pwd=password_hash($this->pwd,PASSWORD_BCRYPT,$hash_options);
    }
}