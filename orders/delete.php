<?php
session_start();
require '../config.php';
require_once '../functions.php';

$user_id=$_SESSION["loggedUser"]['id'];
$id=$_GET['id'];
$order=new Shopping_List();
$order->delete($id);
$lists = new Shopping_List();
$lists=$lists->getByUserId($user_id);
echo count($lists);