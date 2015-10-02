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
$datab = new Database($db);
$content = $datab->getEntry($_GET['id']);
$entry = $content->fetchObject();
$title = $entry->nadpis . " | Staré Město pod Landštejnem";

return include_once("views/entry-html.php");