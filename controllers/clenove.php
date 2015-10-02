<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 18:11
 */
$title = "Členové | Staré Město pod Landštejnem";
$members = new Database($db);
$clenove = $members->getAllMembers();
$allMembers = "<h1>Členové</h1>";
return include_once("views/clenove-html.php");