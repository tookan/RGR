<?php
header('Content-Type: text/html; charset=cp-1251');
require_once 'mapper.php';
require_once 'singletone.php';
require_once 'Game_of_trone.php';
require_once 'Game_of_troneMapper.php';
require_once 'about.php';
require_once 'aboutMapper.php';

$updab=new aboutMapper();
$updobj=$updab->download($_POST['id']);
$updString=$_POST['interest_facts'];
$updobj[0]->interest_facts=$updString;
$updab->updateabout($updobj);