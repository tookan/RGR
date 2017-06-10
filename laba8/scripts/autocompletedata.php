<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once "/virt/homes/mpanovam/htdocs/laba8/zakazBD.php";

$list = new zakazBD;
$list= $list->poiskZakazov($_GET['term']);
echo json_encode($list,JSON_UNESCAPED_UNICODE);