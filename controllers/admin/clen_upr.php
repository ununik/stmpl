<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 30. 7. 2015
 * Time: 11:29
 */
$title = "Admin | úprava informací o členovi | Staré Město pod Landštejnem";
$clen = new Database($db);
$clen = $clen->getMember($_GET['id']);
$data_clen = $clen->fetchObject();
$err = "";
$jmeno = $data_clen->jmeno;
$prijmeni = $data_clen->prijmeni;
$narozeni = date('Y-m-d', $data_clen->narozeni_timestamp);
$text = $data_clen->text;
if($data_clen->profil_image != ""){
    $picture = "<img src='images/clenove/200/{$data_clen->profil_image}'><br>";
}else{
    $picture = "";
}
if(isset($_POST['jmeno'])){
    if($_POST['jmeno']!=""){
        $jmeno = addslashes(strip_tags($_POST['jmeno']));
    }else{
        $err .= "Není vyplněné jméno!";
        $jmeno = "";
    }
    if($_POST['prijmeni']!=""){
        $prijmeni = addslashes(strip_tags($_POST['prijmeni']));
    }else{
        $err .= "Není vyplněné příjmení!";
        $prijmeni = "";
    }
    $narozeni = addslashes(strip_tags($_POST['narozeni']));
    $text = addslashes(strip_tags($_POST['text']));
    $narozeni = strtotime($narozeni);
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
    }else{
        $imageName = $data_clen->profil_image;
    }
    if($err == ""){

        $input = new Database($db);
        $input->updateMember($_GET['id'], $jmeno, $prijmeni, $narozeni, $imageName, $text);
        header("location: admin.php?page=clenove");
    }
}
$clen = new Member($jmeno, $prijmeni, $narozeni, $data_clen->profil_image);
return include_once("views/admin/clen_upr-html.php");