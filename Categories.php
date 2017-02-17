<?php
require_once 'config.php';
//require_once './functions.php';

/**
 * Description of User
 *
 * @author anas
 */

class Categories {
    //put your code here
    public $id=null;
    public $name;
    public $is_valid=1;
    public $created_at=null;
    public $updated_at=null;


    function __construct() {
        global $con;
    }
    function __get($myname){
        return $this->myname;
    }

    function __set($myname,$value){
        $this->myname = $value;
    }
    function getAll() {
        global $con;
        $categories=[];
        //2- create statement
        $query = "select * from Categories where is_valid=1";
        $stmt = $con->prepare($query);
        // 3- execute statement
        $stmt->execute();
        $result=$stmt->get_result();
        while ($row=$result->fetch_array())
            array_push ($categories, $row);
        return $categories;
    }

    function getById($id) {
        global $con;
        $query="select * from Categories where id=?";
        $stmt=$con->prepare($query);
        @$stmt->bind_param('i',$id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_object('Categories',
            array("id","name","is_valid","created_at","updated_at"));

        if($stmt->affected_rows>0) {

            return $row;
        }else {
            return false;
        }

    }

    function update() {
        global $con;
        $query = "update Categories set  name='".$this->name."',is_valid='".$this->is_valid."',created_at='".$this->created_at."',updated_at='".$this->updated_at."' where id=".$this->id;

        $stmt = $con->prepare($query);
//        $stmt->bind_param('sssi',$name,$email,$pass,$id);
        $stmt->execute();
//        $result = $stmt->get_result();
//        $row = $result->fetch_object('user');
        if($stmt->affected_rows>0)
            return TRUE;
        else
            return FALSE;
    }

    function insert() {
    //  Full texts 	id,product_id,name,is_valid,created_at,updated_at
        global $con;
        $query = "insert into Categories (id,name,is_valid,created_at,updated_at) values(null,?,?,?,?)";
        $stmt = $con->prepare($query);

        @$res=$stmt->bind_param('siss', $this->name,  $this->is_valid,  date("Y-m-d"),  date("Y-m-d"));


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
        $query = "update Categories set is_valid=0 where id=?";
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
