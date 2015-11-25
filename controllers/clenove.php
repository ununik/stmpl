<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 18:11
 */
$members = new Database($db);
$clenove = $members->getAllMembers();


switch($lang){
	case "en":
		$title = "Members | Staré Město pod Landštejnem";
		$allMembers = "<h1>Members</h1>";
		return include_once("views/clenove-html-en.php");
		break;
	default:
		$title = "Členové | Staré Město pod Landštejnem";
		$allMembers = "<h1>Členové</h1>";
		return include_once("views/clenove-html.php");
		break;
}