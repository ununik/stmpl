<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 18:41
 */

$navigation = "<div id='menu_nadpis' onclick='showANDhideMenu(this)'>MENU <img src='/images/header/menu_img.png'></div>";
$navigation .= "<a href='/'>Domů</a>";
$navigation .= "<a href='/clenove'>Členové</a>";
$navigation .= "<a href='/areal'>Areál</a>";
$navigation .= "<a href='/kontakt'>Kontakt</a>";
$navigation .= "<a href='/kalendar/'>Kalendář</a>";
//$navigation .= "<a href='/vybaveni'>Vybavení</a>";

$navigation .= "<img src='/images/header/logo.png' id='male_logo'>";
return $navigation;