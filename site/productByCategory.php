<?php
require '../config.php';
require_once '../functions.php';
require_once  '../product.php';

$id=$_GET['cat_id'];
$products=product::getCatsById($id);
var_dump(json_encode($products));

