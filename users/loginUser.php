<?php
//var_dump($_POST);
session_start();
ob_start();
require '../config.php';
require_once '../functions.php';

if(isset($_POST)) {
    $email = clearInputs($_POST['email']);
    $password = sha1(clearInputs($_POST['password']));
}

$user=new User();

$user->email=$email;
$user->password=$password;
$log=$user->loginUser();
    if($log!=false) {
        $_SESSION['loggedUser'] = $log;
        echo $_SESSION['loggedUser']['fname'] . ' logged';
        header("Location: /site/index.php");
    }else
    echo 'failed';
