<?php
include '../phpscripts/register_control.php';

$user= new register_control();
$user->login = $_POST['login'];
$user->tel= $_POST['tel'];
$user->email= $_POST['email'];
$user->pwd= $_POST['pwd'];
$user->last= $_POST['last'];
$user->middle= $_POST['middle'];
$user->first= $_POST['first'];
$user->save();
echo 'created!';
header('Location:/register.php');
die();