<?php
require '../config.php';
//require_once '../classes/contacts.php';
require_once '../functions.php';
$id=$_GET['id'];

if(contacts::soft_delete($id))
{
  echo "true";
}
else {
  echo "false";
}


 ?>
