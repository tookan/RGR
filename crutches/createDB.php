<?php
include $_SERVER['DOCUMENT_ROOT']."/phpscripts/singletone.php";
$connect=singletone::getInstance();
$connect::$con->exec("CREATE DATABASE usernames");
$connect::$con->exec("USE usernames");
$connect::$con->exec("CREATE TABLE `usernames`.`users` ( `id` INT(6) NOT NULL AUTO_INCREMENT , 
`email` VARCHAR(60) NOT NULL , `pwd` VARCHAR(60) NOT NULL , `tel` SMALLINT(15) NOT NULL , 
`first` VARCHAR(25) NOT NULL , `last` VARCHAR(25) NOT NULL , `middle` VARCHAR(25) NOT NULL , 
`date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `login` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
