<?php
require '../config.php';
require_once '../functions.php';
if(isset($_POST)){
    $id=$_POST['id'];
    $category=new Categories();
    $category=$category->getById($id);
    $category->name=$_POST['name'];
    if($category->update())
        echo "updated";
}