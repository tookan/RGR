<?php
include $_SERVER['DOCUMENT_ROOT'].'/phpscripts/login_control.php';
if (isset($_COOKIE['login']) && isset($_COOKIE['pass'])){
    $ses= new login_control($_COOKIE['login'],$_COOKIE['pass']);
    if($ses->checked){
        echo "<div class='col-md-3 logined'> Hello $ses->login!</div>";
    }
    else echo 'wrong username or password';
}
else new login_control(); 