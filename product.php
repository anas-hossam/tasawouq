<?php
require_once '../config.php';
class product
{

    private $id;
    private $price;
    private $category_id;
    private $quantity;
    private $image;
    private $name;
    private $description;
    private $in_stock;
    private $info;
    private $reviews;
    private $help;
    private $is_valid;
    private $created_at;
    private $updated_at;

    function __construct($id,$category_id,$price,$quantity,$image,$name,$description,$in_stock,$info,$reviews,$help,$is_valid,$created_at=NULL,$updated_at=NULL){

    $this->id=$id;
    $this->category_id=$category_id;
    $this->price=$price;
    $this->quantity=$quantity;
    $this->image=$image;
    $this->name=$name;
    $this->description=$description;
    $this->in_stock=$in_stock;
    $this->info=$info;
    $this->reviews=$reviews;
    $this->help=$help;
    $this->is_valid=$is_valid;
    $this->created_at=$created_at;
    $this->updated_at=$updated_at;


 }
function __get($attr){
    return $this->attr;
}
function __set($attr,$value){
    $this->attr = $value;
}
//insert function
function insert(){

  global $con;
  $success=true;
  $query="insert into Products values(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)";
  $statement=$con->prepare($query);
  if(!$statement){
    echo "error preparation".$con->error;
    $success=false;
  }
  $result=$statement->bind_param('idisssisssiss',$this->category_id,$this->price,$this->quantity, $this->image,$this->name, $this->description,$this->in_stock,$this->info,$this->reviews,$this->help, $this->is_valid,date("Y-m-d"),date("Y-m-d"));
  if(!$result)
  {
    echo "bind failed".$statement->error."<br />";
    $success=false;
  }
  if(!$statement->execute()) {
    echo "excute failed".$statement->error."<br />";
    $success=false;
  }

   return $success;
}
static function getProduct(){
    global $con;
    $products=[];
    $query = "select * from Products where is_valid=1";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result=$stmt->get_result();
    while ($row=$result->fetch_array())
        array_push ($products, $row);

    return $products;
}

static function homeProducts($homeProduct){

    global $con;
    $productsH=[];
    $query="select image,name from Products where category_id in(SELECT id from Categories where name='$homeProduct')";
//    var_dump($query);
    $stmt = $con->prepare($query);
    @$stmt->execute();
    $result=$stmt->get_result();
    while ($row=$result->fetch_array())
        array_push ($productsH, $row);

    return $productsH;
}
static function getCatsById($d){
    global $con;
    $products=[];
    $query = "select * from Products where category_id=".$d;
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result=$stmt->get_result();
    while ($row=$result->fetch_array())
        array_push ($products, $row);

    return $products;
}

static function getbyid($id){
  global $con;
  $product=[];
  $query = "select * from Products where id=?";
  $stmt = $con->prepare($query);
  $stmt->bind_param('i',$id);
  $stmt->execute();
  $result=$stmt->get_result();
  $row=$result->fetch_array();
  return $row;
}

  function update($id){

  global $con;
  $success=true;
  $query="update Products set category_id=?, price=?,quantity=?,image=?, name=?, description=? , in_stock=? ,info=? ,reviews=? ,help=?
  ,is_valid=?,updated_at=? where id=?";

  $statement=$con->prepare($query);
  $result=$statement->bind_param('idisssisssisi',$this->category_id,$this->price,$this->quantity, $this->image,$this->name,
  $this->description,$this->in_stock,$this->info,$this->reviews,$this->help,
  $this->is_valid,$this->updated_at,$id);
  if(!$result)
  {
    echo "bind failed".$statement->error."<br />";
      $success=false;
  }
  if(!$statement->execute()) {
    echo "excute failed".$statement->error."<br />";
    $success=false;
  }
 return $success;

}

 static function soft_delete($id){
    $success = true;
    global $con;
    $query="update Products set is_valid=0  where id=".$id;
      $stmt = $con->prepare($query);
      $stmt->execute();
    if(!$stmt){
      $success = false;
    }

    return $success;

}
}
?>
