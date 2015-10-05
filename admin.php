<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 30. 7. 2015
 * Time: 9:47
 */
session_start();
$db = new PDO('mysql:host=localhost;dbname=stmpl', 'root', '');
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$title = null;
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




$data->setNavigation(include_once("controllers/admin/navigation.php"));
if($getPage == "home"){
    $data->setHeader("<div id='header_home'><div><h1>Biatlon v srdci České Kanady</h1></div></div><div id='headerbox'>
                      <h1>Klub biatlonu<br>Staré Město pod Landštejnem</h1>
                      <h2>klub ze srdce České Kanady</h2>
                      <div id='photoBoxAll'></div>
                      </div>");
}else{
    $data->setHeader("<div id='header_all'>Staré Město pod Landštejnem</div>");
}



if(!isset($_SESSION['StMpL']) || $_SESSION['StMpL'] !== md5('StMpL2015')){
    $data->setContent(include_once("controllers/admin/login.php"));
}else {
    if(!file_exists("controllers/admin/$getPage.php")){
        $data->setContent(include_once("controllers/noPage.php"));
    }else{
        $data->setContent(include_once("controllers/admin/$getPage.php"));
    }
}
$data->setTitle($title);
$data->setFooter(include_once("views/footer.php"));
$page = include_once("views/admin/page.php");

print $page;