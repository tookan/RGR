<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'main.html';
include_once 'podkluchenie.php';
include_once 'zakazBD.php';

$var=new zakazBD();
$var->poiskZakazov();

require 'scripts/autocompletedata.php';
