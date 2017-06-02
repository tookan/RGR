<?php
require_once 'mapper.php';
require_once 'singletone.php';
require_once 'Game_of_trone.php';
require_once 'Game_of_troneMapper.php';
require_once 'about.php';
require_once 'aboutMapper.php';

$obj=new Game_of_trone();
$obj->gettingform();
$inputGOT= new Game_of_troneMapper();
$inputGOT->addhero($obj);
