<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 16:13
 */


$www = "http://biatlon-stmpl.tode.cz/";
$title = "Staré Město pod Landštejnem";
$facebook = include_once('views/facebookBox.php');
$entries = new Database($db);
$entries = $entries->getHomeEntries();
$allEntries = "";
$content = include_once('views/home-html.php');
$content .= include_once('views/facebook-home.php');


switch($lang){
	case "en":
		$content .= include_once('views/sponzori-home-en.php');
		break;
	default:
		$content .= include_once('views/sponzori-home.php');
		break;
}
return "<div id='contentHomeAll'>$content</div>";