<?php
require '../config.php';
require_once '../functions.php';

$category=new Sub_categories();
$category->name=clearInputs($_POST['name']);
$category->category_id=clearInputs($_POST['category_id']);
if($category->insert())
    echo "inserted";
else
    echo "error";

?>