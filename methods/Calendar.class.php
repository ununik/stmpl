<?php

/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 26.10.2015
 * Time: 10:42
 */
class Calendar
{
    protected $title;
    protected $from;
    protected $to;
    protected $popis;
    protected $odkaz;

    public function __construct($from, $to, $title, $popis, $odkaz){
        $this->from = $from;
        $this->to = $to;
        $this->title = $title;
        $this->popis = $popis;
        $this->odkaz = $odkaz;
    }
}