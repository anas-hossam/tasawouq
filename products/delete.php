<?php
require '../config.php';
//require_once '../classes/product.php';
require_once '../functions.php';
$id=$_GET['id'];
if(product::soft_delete($id))
     echo "true";
else {
    echo  "false";
}


?>
