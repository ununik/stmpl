<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 19. 7. 2015
 * Time: 6:16
 */
$dbInfo = "mysql:host=localhost;dbname=stmpl";
$dbUser = "root";
$dbPassword = "";
$db = new PDO( $dbInfo, $dbUser, $dbPassword );
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




$data->setNavigation(include_once("controllers/navigation.php"));
if($getPage == "home"){
    $data->setHeader("<div id='header_home'><div><h1>Biatlon v srdci České Kanady</h1></div></div><div id='headerbox'>
                      <h1>Klub biatlonu<br>Staré Město pod Landštejnem</h1>
                      <h2>klub České Kanady</h2>
                      <div id='photoBoxAll'></div>
                      </div>");
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
