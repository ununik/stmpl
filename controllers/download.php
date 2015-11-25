<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 8. 8. 2015
 * Time: 12:31
 */
switch($lang){
	case "en":
		$title = "Downloads | Staré město pod Landštejnem";
		return include_once("views/downloads-en.php");
		break;
	default:
		$title = "Ke stažení | Staré město pod Landštejnem";
		return include_once("views/downloads.php");
		break;
}
