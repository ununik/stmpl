<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 19.10.15
 * Time: 10:51
 */
$title = "Vybavení | Staré Město pod Landštejnem";
if(isset($_GET['vybaveni'])){
    $getVybaveni = $_GET['vybaveni'];
}else{
    $getVybaveni = '';
}

return include_once('views/vybaveni.php');