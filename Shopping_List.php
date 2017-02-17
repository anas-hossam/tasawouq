<?php
require_once 'config.php';

class Shopping_List {
    //put your code here
    public $id=null;
    public $user_id;
    public $product_id;
    public $quantity;
    public $total_price;
    public $is_valid=1;
    public $created_at=null;
    public $updated_at=null;


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
        $orders=[];
        $query = "select * from Shopping_List where is_valid=1";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $result=$stmt->get_result();
        while ($row=$result->fetch_array())
            array_push ($orders, $row);
        return $orders;
    }

    function getById($id) {
        global $con;
        $query="select * from Shopping_List where id=?";
        $stmt=$con->prepare($query);
        @$stmt->bind_param('i',$id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_object('Shopping_List',
            array("id","user_id","product_id","quantity","total_price","is_valid","created_at","updated_at"));
        if($stmt->affected_rows>0) {

            return $row;
        }else {
            return false;
        }

    }

    function getByUserId($user_id) {
        global $con;
        $userOrders=[];
        $query="SELECT * FROM `Shopping_List` WHERE user_id=? and is_valid=1";
        $stmt=$con->prepare($query);
//        var_dump($stmt);
        @$stmt->bind_param('i',$user_id);
        $stmt->execute();
        if(!$stmt){
            echo "preparation failed ".$con->errno." : ".$con->error."<br>";
        }
        $result=$stmt->get_result();
        if(!$result)
            echo 'bind falied'.$stmt->error;

        while ($row=$result->fetch_array())
            array_push ($userOrders, $row);
//        var_dump($userOrders);
        return $userOrders;

    }

    function update() {
        global $con;
        /*
         * id, user_id, product_id, quantity, total_price, is_valid, created_at, updated_at
         * */
        $query = "update Shopping_List set user_id='".$this->user_id."', product_id='".$this->product_id."',quantity='".$this->quantity."',total_price='".$this->total_price."',is_valid='".$this->is_valid."',created_at='".$this->created_at."',updated_at='".$this->updated_at."' where id=".$this->id;

        $stmt = $con->prepare($query);

        $stmt->execute();

        if($stmt->affected_rows>0)
            return TRUE;
        else
            return FALSE;
    }

    function insert() {

        global $con;
        $query = "insert into Shopping_List (id, user_id, product_id, quantity, total_price, is_valid, created_at, updated_at) values(null,?,?,?,?,1,?,?)";
        var_dump($query);
        $stmt = $con->prepare($query);

        $res=$stmt->bind_param('iiidss',  $this->user_id,  $this->product_id,  $this->quantity,  $this->total_price, $this->created_at, $this->updated_at);


        if(!$res)
            echo 'bind falied'.$stmt->error;

        if(!$stmt->execute()) {
            return false;
        }
        return TRUE;

    }
    function delete($id) {
        global $con;
        //2- create statement
        $query = "update Shopping_List set is_valid=0 where id=?";
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
