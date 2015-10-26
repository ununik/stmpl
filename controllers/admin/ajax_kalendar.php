<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 26.10.15
 * Time: 12:18
 */
$id = $_GET['id'];
$saved = 0;
if(($id == 0 || $id == "") && !isset($_GET['save'])){
    $result['nadpis'] = "";
    $result['from'] = $_GET['timestamp'];
    $result['to'] = $_GET['timestamp'];
    $result['popis'] = "";
    $result['odkaz'] = "";
    $result['kategorie'] = "";
}else {
    if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
        $db = new PDO('mysql:host=localhost;dbname=stmpl', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } else {
        $db = new PDO('mysql:host=localhost;dbname=stmpl', 'ununik', 'Unununium111');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    include_once("../../methods/Database.class.php");

    $database = new Database($db);
    $result = $database->getEventCalendar($id);
}
if(isset($_GET['save'])){
    $result['nadpis'] = addslashes(strip_tags($_GET['nadpis']));
    if($result['nadpis'] == ""){
        $err[] = 'Není vyplněný nadpis!';
    }
    $result['popis'] = addslashes(strip_tags($_GET['popis']));
    $result['odkaz'] = addslashes(strip_tags($_GET['odkaz']));
    $result['kategorie'] = $_GET['category'];
    $from = split (" - " ,$_GET['from']);
    $from[0] = split (". " ,$from[0]);
    $from[1] = split (":" ,$from[1]);
    $result['from'] = mktime($from[1][0], $from[1][1], 0, $from[0][1], $from[0][0], $from[0][2]);
    $to = split (" - " ,$_GET['to']);
    $to[0] = split (". " ,$to[0]);
    $to[1] = split (":" ,$to[1]);
    $result['to'] = mktime($to[1][0], $to[1][1], 0, $to[0][1], $to[0][0], $to[0][2]);
    if($result['to'] == 0){
        $result['to'] = $result['from'];
    }
    if($result['to'] < $result['from']){
        $to_reserva = $result['to'];
        $result['to'] = $result['from'];
        $result['from'] = $to_reserva;
    }
    if(!isset($err)){
        if($id == 0 || $id == "") {
            $database->saveEventCalendar($result['nadpis'], $result['from'], $result['to'], $result['popis'], $result['odkaz'], $result['kategorie']);
        }else{
            $database->updateEventCalendar($result['nadpis'], $result['from'], $result['to'], $result['popis'], $result['odkaz'], $result['kategorie'], $result['id']);
        }
        $saved = 1;
        $err[] = 'Úspěšně uloženo.';
    }
}
$from = date('j. n. Y - H:i', $result['from']);
$to = date('j. n. Y - H:i', $result['to']);
$container = "";
if(isset($err)){
    foreach($err as $err){
        $container .= "$err<br>";
    }
}
if($saved != 1) {
    $container .= "<table class='admin_calendar_table'>";

    $category = "<select id='kalendar_category'>";
    $category .= "<option value='zavody' ";
        if($result['kategorie'] == "zavody"){
            $category .= "selected";
        }
    $category .= ">Závody</option>";
    $category .= "<option value='trenink' ";
    if($result['kategorie'] == "trenink"){
        $category .= "selected";
    }
    $category .= ">Trénink</option>";
    $category .= "<option value='brigada' ";
    if($result['kategorie'] == "brigada"){
        $category .= "selected";
    }
    $category .= ">Brigáda</option>";
    $category .= "<option value='jine' ";
    if($result['kategorie'] == "jine"){
        $category .= "selected";
    }
    $category .= ">Jiné</option>";
    $category .= "</selected>";

    $container .= "<tr><td>Nadpis</td><td><input type='text' value='{$result['nadpis']}' id='kalendar_nadpis'></td></tr>";
    $container .= "<tr><td>Od</td><td><input type='text' value='$from' id='kalendar_from'></td></tr>";
    $container .= "<tr><td>Do</td><td><input type='text' value='$to'  id='kalendar_to'></td></tr>";
    $container .= "<tr><td>Kategorie</td><td  id='kalendar_popis'>$category</td></tr>";
    $container .= "<tr><td>Popis</td><td  id='kalendar_popis'><textarea>{$result['popis']}</textarea></td></tr>";
    $container .= "<tr><td>Odkaz</td><td><input type='text' value='{$result['odkaz']}'  id='kalendar_odkaz'></td></tr>";
    if ($id == 0 || $id == "") {
        $container .= "<tr><td colspan='2'><button class='submit_entry' onclick='kalendar_udalost_admin_saveNew()'>Uložit</button></td></tr>";
    } else {
        $container .= "<tr><td colspan='2'><button class='submit_entry' onclick='kalendar_udalost_admin_saveUpdate(\"{$result['id']}\")'>Upravit</button></td></tr>";
    }
    $container .= "</table>";
}
print $container;