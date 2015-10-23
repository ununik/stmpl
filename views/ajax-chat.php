<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 22.10.2015
 * Time: 15:36
 */
$container = "";
foreach ($result as $result){
    $timestamp = date('j.n.Y (H:i)', $result['timestamp']);
    $container .=  '<div><small><b>' . $timestamp . '</b></small> - ' . $result['text'] . '</div>';
}
return $container;