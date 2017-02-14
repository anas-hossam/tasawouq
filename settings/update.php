<?php

//var_dump($_POST);
require_once '../config.php';
require_once '../functions.php';

$settings=new  Settings();
if(isset($_POST)){
    /*  	 	 	 	 	 	 	 	 	 	 	 	  */
    $title=clearInputs($_POST['title']);
    $main_link1=clearInputs($_POST['main_link1']);
    $main_link2=clearInputs($_POST['main_link2']);
    $main_link3=clearInputs($_POST['main_link3']);
    $home_txt1=clearInputs($_POST['home_txt1']);
    $home_txt2=clearInputs($_POST['home_txt2']);
    $tel=clearInputs($_POST['tel']);
    $address=clearInputs($_POST['address']);
    $email=clearInputs($_POST['email']);
    $fb=clearInputs($_POST['fb']);
    $tw=clearInputs($_POST['tw']);
    $rss=clearInputs($_POST['rss']);
    $rights=clearInputs($_POST['rights']);

    $settings->title=$title;
    $settings->main_link1=$main_link1;
    $settings->main_link2=$main_link2;
    $settings->main_link3=$main_link3;
    $settings->home_txt1=$home_txt1;
    $settings->home_txt2=$home_txt2;
    $settings->tel=$tel;
    $settings->address=$address;
    $settings->email=$email;
    $settings->fb=$fb;
    $settings->tw=$tw;
    $settings->rss=$rss;
    $settings->rights=$rights;

    if($settings->update())
            echo 'updated';
    else
        echo 'failed';

}