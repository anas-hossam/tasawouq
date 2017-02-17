<?php
require '../config.php';
require_once '../functions.php';

$name=clearInputs($_POST['name']);
$email=clearInputs($_POST['email']);
$message=clearInputs($_POST['message']);
$contact=new contacts($name,$email,$message);

var_dump($contact);
if($contact->insert())
    echo 'true';
else
    echo 'false';
