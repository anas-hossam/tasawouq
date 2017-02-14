<?php
require './config.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author anas
 */

class Database {
    //put your code here
    public $dbhost,$dbuser,$dbpass,$dbname,$mysqli;
    public function __construct() {
       
    }
    function connect(){
         global $dbhost,$dbuser,$dbpass,$dbname;
        // open connection
        $this->mysqli = new mysqli($dbhost, $dbuser,$dbpass);
        $this->mysqli->select_db($dbname);
        
        // Check connection
        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
        return $this->mysqli;
    }
            function __get($name){
        return $this->$name;
    }

    function __set($name,$value){
        $this->$name = $value;
    }
    public function close(){
        //global $mysqli;
        $this->mysqli->close();
    }
}
