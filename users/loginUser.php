<?php
//var_dump($_POST);
session_start();
ob_start();
require '../config.php';
require_once '../functions.php';

if(isset($_POST)) {
    $email = clearInputs($_POST['email']);
//    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $emailErr = "Invalid email format";
//        $_SESSION['error']=$emailErr;
//    }else
//        unset($_SESSION['error']);
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
