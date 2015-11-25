<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 17:04
 */
switch($lang){
	case "en":
		$title = "Areal | Staré Město pod Landštejnem";
		return include_once("views/areal-html-en.php");
		break;
	default:
		$title = "Areál | Staré Město pod Landštejnem";
		return include_once("views/areal-html.php");
		break;
}

