<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 31. 7. 2015
 * Time: 16:45
 */
if(!isset($_GET['id']) || $_GET['id'] == ""){
    header("location: index.php?page=noPage");
}
$www = "http://biatlon-stmpl.tode.cz/";
$datab = new Database($db);
$content = $datab->getEntry($_GET['id']);
$entry = $content->fetchObject();
$entries = $datab->getAllEntries();

$title = $entry->nadpis . " | Staré Město pod Landštejnem";

return include_once("views/entry-html.php");