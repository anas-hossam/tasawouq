<?php
require_once 'config.php';
require_once 'functions.php';
session_start();
if(isset($_POST))
{
    $email=clearInputs($_POST['email']);
    $password=sha1(clearInputs($_POST['password']));
    $user=new User();
    $user->email=$email;
    $user->password=$password;
    if($user->login())
    {
        $user=$user->login();
        $_SESSION['logged']=$user;
        print_r(json_encode($_SESSION['logged']));

    }else{
        echo 'failed';

    }


}