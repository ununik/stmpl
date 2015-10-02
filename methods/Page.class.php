<?php

/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 19. 7. 2015
 * Time: 6:18
 */
class Page
{
    use Navigation, Footer, Content;
    protected $navigations;
    protected $entry;
    protected $footer;
    protected $content;
    protected $title;
    protected $header;
}