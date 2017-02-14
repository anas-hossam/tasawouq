<?php

require '../config.php';
require_once '../functions.php';

$id=$_GET['id'];
$user=new User();
$user->delete($id);