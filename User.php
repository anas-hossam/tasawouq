<?php
require_once 'config.php';
//require_once './functions.php';

/**
 * Description of User
 *
 * @author anas
 */

 class User {
    //put your code here
    public $id=null;
    public $fname;
    public $lname;
    public $password;
    public $birthday;
    public $job;
    public $email;
    public $credit_limit=0;
    public $address;
    public $interests=null;
    public $is_admin=0;
    public $is_valid=1;
    public $created_at=null;
    public $updated_at=null;

            
    function __construct() {
        global $con;
    }
    function __get($name){
        return $this->$name;
    }

    function __set($name,$value){
        $this->$name = $value;
    }
    function getUsers() {
          global $con;
        $users=[];
        //2- create statement
        $query = "select * from Users where is_valid=1";
        $stmt = $con->prepare($query);
        // 3- execute statement
        $stmt->execute();
        $result=$stmt->get_result();
        while ($row=$result->fetch_array())
            array_push ($users, $row);
//        print_r($users);
        // close database
//        $con->close();
        return $users;
    }
     function getAllUsers() {
         global $con;
         $users=[];
         //2- create statement
         $query = "select * from Users ";
         $stmt = $con->prepare($query);
         // 3- execute statement
         $stmt->execute();
         $result=$stmt->get_result();
         while ($row=$result->fetch_array())
             array_push ($users, $row);
//        print_r($users);
         // close database
//        $con->close();
         return $users;
     }
    function getById($id) {
          global $con;
        $query="select * from Users where id=?";
        $stmt=$con->prepare($query);
        @$stmt->bind_param('i',$id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_object('user',
            array("id","fname","lname","password","birthday","job","email","credit_limit","address","interests","is_admin","is_valid","created_at","updated_at"));
        // close database
//        $con->close();
        if($stmt->affected_rows>0) {

            return $row;
        }else {
            return false;
        }
      
    }
    
    function update() {
          global $con;
        $query = "update Users set fname='".$this->fname."', lname='".$this->lname."',password='".$this->password."',birthday='".$this->birthday."',job='".$this->job."',credit_limit='".$this->credit_limit."',address='".$this->address."',interests='".$this->interests."',is_admin='".$this->is_admin."', email='".$this->email."',is_valid='".$this->is_valid."',created_at='".$this->created_at."',updated_at='".$this->updated_at."' where id=".$this->id;

        $stmt = $con->prepare($query);
//        var_dump($query);
//        exit();
//        $stmt->bind_param('sssi',$name,$email,$pass,$id);
        $stmt->execute();
//        $result = $stmt->get_result();
//        print_r($result);
////        exit;
//        $row = $result->fetch_object('user');
//        $this->id=$row->id;
//        $this->email=$row->email;
//        $this->pass=$row->pass;
//        $this->username=$row->username;
        // close database
        //$con->close();
        if($stmt->affected_rows>0)
            return TRUE;
        else 
            return FALSE;
    }
    function login() {
          global $con;
//        $mysqli=  get_db();
        $query="select * from Users where email=? and password=? and is_admin=1";

        $stmt = $con->prepare($query);
        if(!$stmt){
            echo "preparation failed ".$con->errno." : ".$con->error."<br>";
        }
        $stmt->bind_param('ss',$this->email,$this->password );
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array();
        if($stmt->affected_rows>0)
            return $row;
        else
            return FALSE;
    }
     function loginUser() {
         global $con;
//        $mysqli=  get_db();
         $query="select * from Users where email=? and password=?";

         $stmt = $con->prepare($query);
         if(!$stmt){
             echo "preparation failed ".$con->errno." : ".$con->error."<br>";
         }
         $stmt->bind_param('ss',$this->email,$this->password );
         $stmt->execute();
         $result = $stmt->get_result();
         $row = $result->fetch_array();
         if($stmt->affected_rows>0)
             return $row;
         else
             return FALSE;
     }
    function insert() {

         global $con;
        $query = "insert into Users (id,fname,lname,password,birthday,job,email,credit_limit,address,interests,is_admin,is_valid) values(null,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $con->prepare($query);
      
        $res=$stmt->bind_param('ssssssdssii',  $this->fname,  $this->lname,  $this->password,  $this->birthday,  $this->job,  $this->email,  $this->credit_limit,  $this->address,  $this->interests,  $this->is_admin,  $this->is_valid);


        if(!$res)
            echo 'bind falied'.$stmt->error;

        if(!$stmt->execute()) {
          //  echo 'bind falied'.$stmt->error;
            return false;
        }

            return TRUE;

    }
    function delete($id) {
          global $con;
        //2- create statement
        $query = "update Users set is_valid=0 where id=?";
        $stmt = $con-> prepare($query);
        $stmt->bind_param('i',  $id);
        // 3- execute statement
        $stmt->execute();
        if($stmt->affected_rows>0)
            return TRUE;
        else
            return FALSE;
    }
    function close(){
        global $con;
        // close database
        $con->close();
    }
    
}
