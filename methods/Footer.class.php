<?php

/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 16:29
 */
trait Footer
{
    public function setFooter($footer = ""){
        $this->footer = $footer;
    }
    public function getFooter(){
        return "<div id='footer'>$this->footer<div>";
    }
}