<?php
require_once 'config.php';
//require_once './functions.php';

/**
 * Description of User
 *
 * @author anas
 */

class Sub_categories {
    //put your code here
    //   	id 	category_id 	name 	is_valid 	created_at 	updated_at
    public $id=null;
    public $category_id;
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
        $sub_categories=[];
        //2- create statement
        $query = "select * from Sub_categories where is_valid=1";
        $stmt = $con->prepare($query);
        // 3- execute statement
        $stmt->execute();
        $result=$stmt->get_result();
        while ($row=$result->fetch_array())
            array_push ($sub_categories, $row);
        return $sub_categories;
    }

    function getById($id) {
        global $con;
        $query="select * from Sub_categories where id=?";
        $stmt=$con->prepare($query);
        @$stmt->bind_param('i',$id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_object('Sub_categories',
            array("id","name","category_id","is_valid","created_at","updated_at"));

        if($stmt->affected_rows>0) {

            return $row;
        }else {
            return false;
        }

    }

    function update() {
        global $con;
        $query = "update Sub_categories set  category_id='".$this->category_id."',name='".$this->name."',is_valid='".$this->is_valid."',created_at='".$this->created_at."',updated_at='".$this->updated_at."' where id=".$this->id;

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
        $query = "insert into Sub_categories (id,category_id,name,is_valid,created_at,updated_at) values(null,?,?,?,?,?)";
        $stmt = $con->prepare($query);

        @$res=$stmt->bind_param('isiss', $this->category_id,$this->name,  $this->is_valid,  date("Y-m-d"),  date("Y-m-d"));


        if(!$res)
            echo 'bind falied'.$stmt->error;

        if(!$stmt->execute()) {
            //  echo 'bind falied'.$stmt->error;
            return false;
        }

        return TRUE;

    }
    public function getSubcategoryByCategoryId($id) {
        global $con;
        $sub_categories = [];
        $stmt = $con->prepare("SELECT * FROM `Sub_categories` WHERE `category_id` = ?");
        @$stmt->bind_param('i', intval($id));
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_array())
            array_push($sub_categories, $row);
        return $sub_categories;

    }
    function delete($id) {
        global $con;
        //2- create statement
        $query = "update Sub_categories set is_valid=0 where id=?";
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
