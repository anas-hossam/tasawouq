<?php

require '../config.php';
require_once '../functions.php';
require_once '../product.php';
session_start();
$list=new Shopping_List();


if(isset($_POST) && isset($_SESSION['loggedUser']))
{
    //  id 	user_id 	product_id 	quantity 	total_price 	is_valid 	created_at 	updated_at
        $product_id=clearInputs($_POST['product_id']);
        $user_id=$_SESSION['loggedUser']['id'];
        $qty=clearInputs($_POST['quantity']);
        $product=product::getbyid($product_id);
        $price=$product['price'];
        $tot_price=clearInputs($price);

        $list->product_id=$product_id;
        $list->user_id=$user_id;
        $list->quantity=$qty;
        $list->total_price=$price;
        $list->created_at=date("Y-m-d");
        $list->updated_at=date("Y-m-d");
//        var_dump($list);
        if($list->insert())
            echo 'true';
        else
            echo 'false';
}