<?php

require '../config.php';
require_once '../functions.php';

$id=$_GET['id'];
$category=new Sub_categories();
$category->delete($id);