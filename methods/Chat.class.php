<?php

/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 21.10.2015
 * Time: 14:16
 */
trait Chat
{
    public function getChat(){
        return include_once('controllers/ajax_chat.php');
    }
}