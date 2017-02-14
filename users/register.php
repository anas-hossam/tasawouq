<?php
//var_dump($_POST);
session_start();
require '../config.php';
require_once '../functions.php';
if(isset($_POST))
{
    $fname=clearInputs($_POST['fname']);
    $lname=clearInputs($_POST['lname']);
    $password=sha1(clearInputs($_POST['password']));
    $email=clearInputs($_POST['email']);
    $job=clearInputs($_POST['job']);
    $birthday=clearInputs($_POST['birthday']);
    $credit_limit=clearInputs($_POST['credit_limit']);
    $address=clearInputs($_POST['address']);

}
$user=new User();

$user->fname=$fname;
$user->lname=$lname;
$user->password=$password;
$user->birthday=$birthday;
$user->email=$email;
$user->job=$job;
$user->credit_limit=$credit_limit;
$user->address=$address;
//var_dump($user);
$res=$user->insert();
if($res){
    $_SESSION['loggedUser']=(array)$user;
    echo 'inserted';

} else
    echo 'failed';