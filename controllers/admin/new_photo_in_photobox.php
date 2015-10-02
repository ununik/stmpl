<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 31. 7. 2015
 * Time: 16:39
 */
$title = "Nový příspěvek na úvodní stránku | Admin | Staré Město pod Landštejnem";
$err = "";
$text = "";
$nadpis = "";
$url = "";
$img = "";
if(isset($_GET['id']) && $_GET['id'] != ""){
    $new = new Database($db);
    $entryObj = $new->getPhotobox($_GET['id']);
    $entry = $entryObj->fetchObject();
    $nadpis = $entry->title;
    $text = $entry->text;
    $imageName = $entry->image;
    $img = "<img src='images/header/150/$imageName'><br>";
    $url = $entry->link;
}
if(isset($_POST['text'])) {
    if ($_POST['text'] == "" && $_POST['nadpis'] == "") {
        $err = "Musí být vyplněno vše!";
    }
    $text = $_POST['text'];
    $nadpis = $_POST['nadpis'];
    $url = $_POST['url'];

    if ($_FILES['image']['name'] != "") {
        if ($_FILES['image']['error'] == "") {
            $image = $_FILES['image'];
            switch ($image['type']) {
                case "image/png":
                    $sufix = ".png";
                    break;
                case "image/gif":
                    $sufix = ".gif";
                    break;
                case "image/jpeg":
                    $sufix = ".jpg";
                    break;
                case "image/jpg":
                    $sufix = ".jpg";
                    break;
                default:
                    $sufix = "";
                    $err = "Neznámý typ souboru.";
            }
            $profileImageNumber = howManyFilesInFolder('images/header/original/', $sufix);
            $imageName = $profileImageNumber . $sufix;
            move_uploaded_file($image['tmp_name'], 'images/header/original/' . $imageName);
            resizeImage(1000, 'images/header/1000/' . $profileImageNumber, 'images/header/original/' . $imageName);
            resizeImage(150, 'images/header/150/' . $profileImageNumber, 'images/header/original/' . $imageName);

        } else {
            $err = "Problém s uložením profilového obrázku.";
        }
    }elseif($imageName == ""){
        $err = "Není přiložený žádný obrázek.";
    }

        if ($err == "") {
            $add = new Database($db);
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $add->updatePhotobox($nadpis, $text, $url, $_GET['id'], $imageName);
            } else {
                $add->addPhotobox($nadpis, $text, $url, $imageName);
            }
            header("location: admin.php?page=home");
        }

}
return include_once('views/admin/new-Photo-in-Photobox.php');