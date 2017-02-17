<?php

require '../config.php';
require_once '../functions.php';

$id=$_GET['id'];
$category=new Categories();
$category->delete($id);