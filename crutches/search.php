<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/phpscripts/singletone.php';

$login= $_POST['searStr'];
$db= singletone::getInstance();
$req=$db->con->prepare("SELECT last, first, middle, login FROM users WHERE login LIKE '".$login."%'");
$req->execute();
$res=$req->fetchAll(PDO::FETCH_ASSOC);
echo '<ul class="sear-res">';
foreach ($res as $user){
    echo "<li class='sear-res'> <b>".$user['login']."</b> , ".$user['last']."  ".$user['first']." ".$user['middle']."</li>";
}
echo '</ul>';