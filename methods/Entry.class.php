<?php

/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 19. 7. 2015
 * Time: 21:27
 */
class Entry extends Page
{
    public function __construct($entry){
        $this->entry = $entry;
    }
}