<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 21.10.2015
 * Time: 17:16
 */
$type = $_GET['type'];
if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $db = new PDO('mysql:host=localhost;dbname=stmpl', 'root', '');
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}else{
    $db = new PDO('mysql:host=localhost;dbname=stmpl', 'ununik', 'Unununium111');
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
include_once ("../methods/Database.class.php");

$database = new Database($db);
$result = $database->getChat($type);

print include_once('../views/ajax-chat.php');