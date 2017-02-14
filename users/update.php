<?php
require '../config.php';
require_once '../functions.php';

$id=clearInputs($_POST['id']);
$valid=clearInputs($_POST['valid']);
$user=new User();
$user->id=$id;
$user=$user->getById($id);
$user->is_valid=$valid;
if($user->update())
    echo "yes";
else
    echo "no";