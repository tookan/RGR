<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "/virt/homes/mpanovam/htdocs/laba8/tovarBD.php";
$tovarBD= new tovarBD();
$name=$_GET['name'];
$tovarBD->deletetovar($name);
