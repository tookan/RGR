<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "/virt/homes/mpanovam/htdocs/laba8/zakazBD.php";
$orders = $_POST['orders'];
$objmap= new zakazBD();
$zakazy=$objmap->vyvodZakazov($orders);

foreach ($zakazy as $zak){
    echo "<div class='col-md-4'> <table class='table table-striped'>
<tr><td>Id: </td><td>$zak->id</td></tr>
<tr><td>Дата: </td><td>$zak->date</td></tr>
<tr><td>Товар: </td><td>$zak->orders</td></tr>
<tr><td>Статус: </td><td>$zak->status</td></tr>
</table></div>
";
}
