<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 26.10.15
 * Time: 12:18
 */
$id = $_GET['id'];
if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $db = new PDO('mysql:host=localhost;dbname=stmpl', 'root', '');
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}else{
    $db = new PDO('mysql:host=localhost;dbname=stmpl', 'ununik', 'Unununium111');
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
include_once ("../methods/Database.class.php");

$database = new Database($db);
$result = $database->getEventCalendar($id);
$container = "<h2>{$result['nadpis']}</h2>";
$container .= "<table><tr><td>Termín:</td><td>";

if($result['to'] == "" || (date('Y-m-j', $result['from']) == date('Y-m-j', $result['to']))){
    $container .= date('j. m. Y', $result['from']);
}elseif(date('Y-m', $result['from']) == date('Y-m', $result['to'])){
    $container .= date('j.', $result['from']) . ' - ' . date('j. ', $result['to']) . date('m. Y', $result['from']);
}elseif(date('Y', $result['from']) == date('Y', $result['to'])){
    $container .= date('j. m.', $result['from']) . ' - ' . date('j. m.', $result['to']) . date(' Y', $result['from']);
}else{
    $container .= date('j. m. Y', $result['from']) . ' - ' . date('j. m. Y', $result['to']);
}

$container .= "</td></tr>";
if($result['popis'] != "") {
    $popis = nl2br($result['popis']);
    $container .= "<tr><td>Popis:</td><td>{$popis}</td></tr>";
}
if($result['odkaz'] != "") {
    $container .= "<tr><td colspan='2'><a href='{$result['odkaz']}' title='{$result['nadpis']}'>Více..</a></td></tr>";
}
$container .= "</table>";
print $container;