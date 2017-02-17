<?php

session_start();

require '../config.php';
require_once '../functions.php';

if(isset($_SESSION["loggedUser"])){
    $user_id=$_SESSION["loggedUser"]['id'];
    $cost_buy=0;
    $lists = new Shopping_List();
    $lists=$lists->getByUserId($user_id);

    foreach ($lists as $list){
        $product_cart = product::getbyid($list['product_id']);
        $cost_buy+=$product_cart['price'];
    }
    $user=new User();
    $user=$user->getById($user_id);
    $old_credit=$user->credit_limit;
    $new_credit=$old_credit-$cost_buy;
    $user->credit_limit=$new_credit;
    $_SESSION["loggedUser"]=(array)$user;
    if($user->update())
        echo 'updated';
    else
        echo 'no';
}