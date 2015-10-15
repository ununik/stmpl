<?php

/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 30. 7. 2015
 * Time: 6:25
 */
class Member
{
    public $jmeno;
    public $prijmeni;
    public $narozeni;
    protected $profil_image;
    protected $text;

    public function __construct($jmeno, $prijmeni, $narozeni, $profil_image, $text){
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
        $this->narozeni = $narozeni;
        $this->profil_image = $profil_image;
        $this->text = $text;
    }

    public function getFullName(){
        return "$this->jmeno $this->prijmeni";
    }

    public function getRokNarozeni(){
        if($this->narozeni == 0){
           return "--";
        }else {
            $rok_narozeni = date("Y", $this->narozeni);
            return $rok_narozeni;
        }
    }
    public function getProfilImage(){
        if(isset($this->profil_image) && $this->profil_image != ""){
            return "<img src='images/clenove/200/$this->profil_image'>";
        }else{
            return "";
        }
    }
    public function getDateOfBirth(){
        return date("Y-m-d", $this->narozeni);
    }

    public function getTextForView(){
        return nl2br($this->text);
    }
}