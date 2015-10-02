<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 30. 7. 2015
 * Time: 9:51
 */
$title = "Administrace";
if(isset($_POST['password'])){
    if( $_POST['password'] !== "StMpL2015") {
        $err = "Chybné heslo";
    }else{
        session_start();
        $_SESSION['StMpL'] = md5('StMpL2015');
        header('Location: '.$_SERVER['PHP_SELF']);
        die();
    }
}
return include_once("views/admin/login-html.php");