<?php
require '../config.php';
require_once '../functions.php';
$category=new Categories();
$category->name=clearInputs($_POST['name']);
if($category->insert())
    echo "inserted";
else
    echo "error";

?>