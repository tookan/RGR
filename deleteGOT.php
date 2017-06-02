<?php
header('Content-Type: text/html; charset=cp-1251');
require_once 'mapper.php';
require_once 'singletone.php';
require_once 'Game_of_trone.php';
require_once 'Game_of_troneMapper.php';
require_once 'about.php';
require_once 'aboutMapper.php';

$delGOT= new Game_of_troneMapper();
$delGOTobj=$delGOT->download($_POST['id']);
$delGOT->deletehero($delGOTobj);



