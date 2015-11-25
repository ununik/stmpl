<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 19. 7. 2015
 * Time: 6:16
 */

if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $db = new PDO('mysql:host=localhost;dbname=stmpl', 'root', '');
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}else{
    $db = new PDO('mysql:host=localhost;dbname=stmpl', 'ununik', 'Unununium111');
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
$title = null;
if(isset($_COOKIE['languageStMpL'])){
	$lang = $_COOKIE['languageStMpL'];
}else{
	$lang = "cz";
}
function __autoload($name){
    include ("methods/$name.class.php");
}
include_once ("methods/functions.php");
$data = new Page();
if(isset($_GET['page']) && $_GET['page']){
    $getPage = $_GET['page'];
}else{
    $getPage = "home";
}




$data->setNavigation(include_once("controllers/navigation.php"));
if($getPage == "home"){
	switch($lang){
		case "en":
			$data->setHeader("<div id='header_home'><div><h1>Biathlon at the heart of the Czech Canada</h1></div></div><div id='headerbox'>
                      <h1>Staré Město pod Landštejnem<br>biathlon club</h1>
                      <h2>club from the heart of the Czech Canada</h2>
                      <div id='photoBoxAll'></div>
                      </div>");
			break;
		default:
			$data->setHeader("<div id='header_home'><div><h1>Biatlon v srdci České Kanady</h1></div></div><div id='headerbox'>
                      <h1>Klub biatlonu<br>Staré Město pod Landštejnem</h1>
                      <h2>klub ze srdce České Kanady</h2>
                      <div id='photoBoxAll'></div>
                      </div>");
			break;
	}
    
}else{
    $data->setHeader("<div id='header_all'>Staré Město pod Landštejnem</div>");
}




if(!file_exists("controllers/$getPage.php")){
    $data->setContent(include_once("controllers/noPage.php"));
}else{
    $data->setContent(include_once("controllers/$getPage.php"));
}
$data->setTitle($title);
$data->setFooter(include_once("views/footer.php"));
$page = include_once("views/page.php");

print $page;
