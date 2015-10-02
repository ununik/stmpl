<?php

/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 16:34
 */
trait Content
{
    public function setContent($content = "<h1>Page Error</h1>"){
        if($content == ""){
            $content = "<h1>Page Error</h1>";
        }
        $this->content = $content;
    }
    public function getContent(){
        return "<main>$this->content</main>";
    }
    public function setTitle($title = 'Staré Město pod Landštejnem'){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
}