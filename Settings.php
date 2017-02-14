<?php
require_once 'config.php';

class Settings {

    public $id=1;
    public $title;
    public $main_link1;
    public $main_link2;
    public $main_link3;
    public $home_txt1;
    public $home_txt2;
    public $tel;
    public $address;
    public $email;
    public $fb;
    public $tw;
    public $rss;
    public $rights;


    function __construct() {
        global $con;
    }
    function __get($name){
        return $this->name;
    }

    function __set($name,$value){
        $this->name = $value;
    }
    function getAll() {
        global $con;
        $settings=[];
        $query = "select * from Settings";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $result=$stmt->get_result();
        while ($row=$result->fetch_array())
            array_push ($settings, $row);
        return $settings;
    }
    function update() {
        global $con;
        $query = "update Settings set title='".$this->title."', main_link1='".$this->main_link1."',main_link2='".$this->main_link2."',main_link3='".$this->main_link3."',home_txt1='".$this->home_txt1."',home_txt2='".$this->home_txt2."',tel='".$this->tel."',address='".$this->address."',email='".$this->email."', fb='".$this->fb."',tw='".$this->tw."',rss='".$this->rss."',rights='".$this->rights."' where id=".$this->id;

        $stmt = $con->prepare($query);
        $stmt->execute();
        if($stmt->affected_rows>0)
            return TRUE;
        else
            return FALSE;
    }

    function close(){
        global $con;
        $con->close();
    }

}
