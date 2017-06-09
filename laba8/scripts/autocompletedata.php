<?php
include_once '../zakazBD.php';

$list = new zakazBD();
$list= $list->poiskZakazov();
echo $list;