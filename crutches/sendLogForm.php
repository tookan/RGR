<?php
include $_SERVER['DOCUMENT_ROOT'].'/phpscripts/login_control.php';
$us= new login_control($_POST['login'],$_POST['pwd']);
    if($us->checked){
        $us->cookiesSet();
        header('Location:/register.php');
        die();
    }
    include '../html/login_form.php';


