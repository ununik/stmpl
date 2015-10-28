<?php

/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 27. 7. 2015
 * Time: 7:11
 */
class Database
{
    protected $db;
    public function __construct($db){
        $this->db = $db;
    }
    public function getCalendar($from, $to){
        $sql = "SELECT * FROM `kalendar` WHERE (`from`>='$from' && `from`<='$to') || (`from`<='$from' && `to`>='$from') ORDER BY `from`";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement->fetchAll();
    }

    public function getNext10Calendar(){
        $now = time();
        $sql = "SELECT * FROM `kalendar` WHERE `to`>=$now ORDER BY `from` LIMIT 10";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement->fetchAll();
    }

    public function getEventCalendar($id){
        $sql = "SELECT * FROM `kalendar` WHERE `id`='$id' ORDER BY `from`";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement->fetch();
    }

    public function saveEventCalendar($nadpis, $from, $to, $popis, $odkaz, $category){
        $entrySQL = "INSERT INTO kalendar (`nadpis`, `from`, `to`, `popis`, `odkaz`, `kategorie`)
                     VALUES ( '$nadpis', '$from', '$to', '$popis', '$odkaz', '$category')";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }

    public  function updateEventCalendar($nadpis, $from, $to, $popis, $odkaz, $category, $id){
        $entrySQL = "UPDATE `kalendar` SET `nadpis`='$nadpis',`from`='$from',`to`='$to',`popis`='$popis',`odkaz`='$odkaz',`kategorie`='$category' WHERE id=$id";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }

    public function getHomeEntries(){
        $sql = "SELECT nadpis, id, SUBSTRING(text, 1, 2000) AS text
                FROM uvodni_texty ORDER BY timestamp DESC LIMIT 3 ";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement;
    }
    public function getAllEntries(){
        $sql = "SELECT nadpis, id, SUBSTRING(text, 1, 2000) AS text
                FROM uvodni_texty ORDER BY timestamp DESC ";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement;
    }
    public function getEntry($id){
        $sql = "SELECT *
                FROM uvodni_texty WHERE id=$id ";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement;
    }
    public function getPhotobox($id){
        $sql = "SELECT *
                FROM photobox WHERE id=$id ";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement;
    }
    public function addHomeEntry($nadpis, $text){
        $timestamp = time();
        $entrySQL = "INSERT INTO uvodni_texty ( nadpis, text, timestamp)
                     VALUES ( '$nadpis', '$text', '$timestamp' )";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }
    public function updateHomeEntry($id, $nadpis, $text){
        $timestamp = time();
        $entrySQL = "UPDATE `uvodni_texty` SET `nadpis`='$nadpis',`text`='$text' WHERE id=$id";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }
    public function deleteHomeEntries($id){
        $sql = "DELETE FROM `uvodni_texty` WHERE id='$id'";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement;
    }
    public function addMember($jmeno, $prijmeni, $narozeni, $image, $text){
        $timestamp = time();
        $entrySQL = "INSERT INTO clenove ( jmeno, prijmeni, narozeni_timestamp, timestamp, profil_image, text )
                     VALUES ( '$jmeno', '$prijmeni', '$narozeni', '$timestamp', '$image', '$text' )";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }
    public function addPhotobox($nadpis, $text, $url, $image){
        $timestamp = time();
        $entrySQL = "INSERT INTO `photobox` (`title` ,`text`, `link`, `timestamp`, `image`)
                     VALUES ('$nadpis', '$text', '$url', '$timestamp', '$image')";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }
    public function updatePhotobox($nadpis, $text, $url, $id, $imageName){
        $timestamp = time();
        $entrySQL = "UPDATE `photobox` SET `title`='$nadpis',`text`='$text', `link`='$url', `image`='$imageName' WHERE id='$id'";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }
    public function deletePhotobox($id){
        $entrySQL = "DELETE FROM `photobox` WHERE id='$id'";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }
    public function getPhotoboxAll(){
        $sql = "SELECT *
                FROM photobox WHERE seen=1 ORDER BY id DESC";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement;
    }

    public function getAllMembers(){
        $sql = "SELECT *
                FROM clenove ORDER BY narozeni_timestamp DESC";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement;
    }
    public function getMember($id){
        $sql = "SELECT *
                FROM clenove WHERE id=$id ";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement;
    }
    public function updateMember($id, $jmeno, $prijmeni, $narozeni, $image, $text){
        $entrySQL = "UPDATE `clenove` SET `jmeno`='$jmeno',
                                          `prijmeni`='$prijmeni',
                                          `narozeni_timestamp`='$narozeni',
                                          `text`='$text',
                                          `profil_image`='$image'

                                          WHERE id='$id'";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }
    public function deleteMember($id){
        $entrySQL = "DELETE FROM `clenove` WHERE id='$id'";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }

    public function getChat($type){
        $sql = "SELECT * FROM `chat` WHERE `type`='$type' ORDER BY timestamp DESC LIMIT 50";
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute();
        } catch (Exception $e) {
            $exceptionMessage
                = "<p>You tried to run this sql: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement->fetchAll();
    }

    public function setChat($type, $text){
        $timestamp = time();
        $entrySQL = "INSERT INTO `chat` (`type` ,`text`, `timestamp`)
                     VALUES ('$type', '$text', '$timestamp')";
        $entryStatement = $this->db->prepare( $entrySQL );

        try{
            $entryStatement->execute();
        } catch (Exception $e){
            $msg = "<p>You tried to run this sql: $entrySQL<p>
                    <p>Exception: $e</p>";
            trigger_error($msg);
        }
    }
}