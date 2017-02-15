<?php

require '../config.php';
require_once '../functions.php';

$id=$_GET['id'];
$order=new Shopping_List();
$order->delete($id);