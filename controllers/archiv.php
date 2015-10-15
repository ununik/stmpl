<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 9. 8. 2015
 * Time: 8:28
 */
$www = "";
$title = 'Archiv | Staré Město pod Landštejnem';
$entries = new Database($db);
$entries = $entries->getAllEntries();
$allEntries = "";
return include_once("views/archiv.php");