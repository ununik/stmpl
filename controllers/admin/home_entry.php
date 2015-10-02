<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 30. 7. 2015
 * Time: 13:49
 */
$title = "Admin | Nový příspěvek | Staré Město pod Landštejnem";
$err = "";
$text = "";
$nadpis = "";
if(isset($_GET['id']) && $_GET['id'] != ""){
    $new = new Database($db);
    $entryObj = $new->getEntry($_GET['id']);
    $entry = $entryObj->fetchObject();
    $nadpis = $entry->nadpis;
    $text = $entry->text;
}
if(isset($_POST['text'])){
    if($_POST['text'] == "" || $_POST['nadpis'] == ""){
        $err = "Musí být vyplněno vše!";
    }
    $text = $_POST['text'];
    $nadpis = $_POST['nadpis'];

    if($err == ""){
        $add = new Database($db);
        if(isset($_GET['id']) && $_GET['id'] != ""){
            $add->updateHomeEntry($_GET['id'], $nadpis, $text);
        }else{
            $add->addHomeEntry($nadpis, $text);
        }
        header("location: admin.php?page=home");
    }
}
return include_once("views/admin/home_entry-html.php");