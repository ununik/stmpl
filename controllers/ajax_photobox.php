<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 25. 7. 2015
 * Time: 7:14
 */
$dbInfo = "mysql:host=localhost;dbname=stmpl";
$dbUser = "root";
$dbPassword = "";
$db = new PDO( $dbInfo, $dbUser, $dbPassword );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
include_once ("../methods/Database.class.php");
$photobox = new Database($db);
$photobox = $photobox->getPhotoboxAll();
$photo = "";
while ( $box = $photobox->fetchObject() ){

    $photo .= "<div class=\"photobox-photo\" onclick='photoboxHeaderPhoto(\"{$box->image}\", \"{$box->title}\", \"{$box->link}\", \"{$box->text}\")'><img src='images/header/150/{$box->image}'> {$box->title}</div>";
}
echo $photo;



