<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 30. 7. 2015
 * Time: 10:25
 */
$title = "Členové | Staré Město pod Landštejnem";
$allMembers = "<h1>Členové</h1>";
$err = "";
$jmeno = "";
$prijmeni = "";
$narozeni = "";
$imageName = "";
if(isset($_POST['jmeno'])){
    if($_POST['jmeno']!=""){
        $jmeno = addslashes(strip_tags($_POST['jmeno']));
    }else{
        $err .= "Není vyplněné jméno!";
    }
    if($_POST['prijmeni']!=""){
        $prijmeni = addslashes(strip_tags($_POST['prijmeni']));
    }else{
        $err .= "Není vyplněné příjmení!";
    }
    $narozeni = addslashes(strip_tags($_POST['narozeni']));

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
            $profileImageNumber = howManyFilesInFolder('images/clenove/original/', $sufix);
            $imageName = $profileImageNumber . $sufix;
            move_uploaded_file($image['tmp_name'], 'images/clenove/original/' . $imageName);
            resizeImage(200, 'images/clenove/200/' . $profileImageNumber, 'images/clenove/original/' . $imageName);
            resizeImage(700, 'images/clenove/700/' . $profileImageNumber, 'images/clenove/original/' . $imageName);

        } else {
            $err[] = "Problém s uložením profilového obrázku.";
        }
    }
    if($err == ""){
        $narozeni = strtotime($narozeni);

        $input = new Database($db);
        $input->addMember($jmeno, $prijmeni, $narozeni, $imageName);
        $err = "";
        $jmeno = "";
        $prijmeni = "";
        $narozeni = "";
    }
}
$members = new Database($db);
$clenove = $members->getAllMembers();
$cont = include_once("views/admin/clenove-html.php");
return $cont;