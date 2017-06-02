<?php
header('Content-Type: text/html; charset=cp-1251');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once 'mapper.php';
require_once 'singletone.php';
require_once 'Game_of_trone.php';
require_once 'Game_of_troneMapper.php';
require_once 'about.php';
require_once 'aboutMapper.php';



include 'view.php';

