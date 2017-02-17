<?php

require_once '../config.php';
class contacts{

private $id;
private $name;
private $email;
private $message;
private $is_valid;

function __get($attr){
    return $this->attr;
}
function __set($attr,$value){
    $this->attr = $value;
}
function __construct($name,$email,$message)
{
    $this->name=$name;
    $this->email=$email;
    $this->message=$message;
}

static function getcontact(){
    global $con;
    $contacts=[];
    $query = "select * from Contacts ";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result=$stmt->get_result();
    while ($row=$result->fetch_array())
        array_push ($contacts, $row);
    return $contacts;
}
 function insert(){
    //  Full texts 	id 	name 	email 	message 	is_valid
    global $con;
    $query = "insert into Contacts (id,name,email,message,is_valid) values(null,?,?,?,1)";
    $stmt = $con->prepare($query);

    $res=$stmt->bind_param('sss', $this->name,$this->email, $this->message);


    if(!$res)
        echo 'bind falied'.$stmt->error;

    if(!$stmt->execute()) {
        //  echo 'bind falied'.$stmt->error;
        return false;
    }

    return TRUE;
}
static function soft_delete($id){
   $success = true;
   global $con;
   $query="update Contacts set is_valid=0  where id=".$id;
     $stmt = $con->prepare($query);
     $stmt->execute();
   if(!$stmt){
     $success = false;
   }
   return $success;

}
static function getbyid($id){
  global $con;
  $contact=[];
  $query = "select * from Contacts where id=?";
  $stmt = $con->prepare($query);
  $stmt->bind_param('i',$id);
  $stmt->execute();
  $result=$stmt->get_result();
  $row=$result->fetch_array();
  return $row;
}



























}//end of class











 ?>
