<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 18:31
 */
switch($lang){
	case "en":
		$title = "Contact | Staré Město pod Landštejnem";
		return include_once('views/kontakt-html-en.php');
		break;
	default:
		$title = "Kontakt | Staré Město pod Landštejnem";
		return include_once('views/kontakt-html.php');
		break;
}

