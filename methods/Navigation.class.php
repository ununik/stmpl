<?php

/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 19. 7. 2015
 * Time: 6:23
 */
// new Navigation (array("menu1", "menu2"...));
trait Navigation
{

    public function setNavigation($navigation){
        $this->navigations = "<div id='nav'>$navigation</div>";
    }
    public function getNavigation(){
        return $this->navigations;
    }
    public function setHeader($header){
        $this->header = $header;
    }
    public function getHeader(){
        return $this->header;
    }
    public function getPhototoPhotobox(){
        $output = "<script>photoboxHeaderAll(0, '', true)</script>";

        return $output;
    }
    public function getPhototoPhotoboxAdmin(){
        $output = "<script>photoboxHeaderAllAdmin(0, '', true)</script>";

        return $output;
    }
}