<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 18:41
 */
switch ($lang){
	case "en":
		$navigation = "<div id='menu_nadpis' onclick='showANDhideMenu(this)'>MENU <img src='/images/header/menu_img.png'></div>";
		$navigation .= "<a href='/'>Home</a>";
		$navigation .= "<a href='/clenove'>Members</a>";
		$navigation .= "<a href='/areal'>Areal</a>";
		$navigation .= "<a href='/kontakt'>Contact</a>";
		$navigation .= "<a href='/kalendar/'>Calendar</a>";
		$navigation .= "<div class='language'>";
		$navigation .= "<div onclick='changeLanguage(\"cz\")' class='translation'><img src='/images/header/cz.png'></div>";
		$navigation .= "</div>";
		//$navigation .= "<a href='/vybaveni'>Vybavení</a>";
		break;
	default:
			$navigation = "<div id='menu_nadpis' onclick='showANDhideMenu(this)'>MENU <img src='/images/header/menu_img.png'></div>";
			$navigation .= "<a href='/'>Domů</a>";
			$navigation .= "<a href='/clenove'>Členové</a>";
			$navigation .= "<a href='/areal'>Areál</a>";
			$navigation .= "<a href='/kontakt'>Kontakt</a>";
			$navigation .= "<a href='/kalendar/'>Kalendář</a>";
			$navigation .= "<div class='language'>";
			$navigation .= "<div onclick='changeLanguage(\"en\")' class='translation'><img src='/images/header/en.png'></div>";
			$navigation .= "</div>";
			//$navigation .= "<a href='/vybaveni'>Vybavení</a>";
			break;
}


$navigation .= "<img src='/images/header/logo.png' id='male_logo'>";
return $navigation;