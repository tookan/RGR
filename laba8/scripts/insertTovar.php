<?php
require_once "/virt/homes/mpanovam/htdocs/laba8/tovarBD.php";
require_once "/virt/homes/mpanovam/htdocs/laba8/tovar.php";

$tovar=new tovar();
$tovar->name= $_POST['name'];
$tovar->description= $_POST['description'];
$tovar->quantity= $_POST['quantity'];
$tovar->price= $_POST['price'];

$tovObj= new tovarBD();
$tovObj->addtovar($tovar);
