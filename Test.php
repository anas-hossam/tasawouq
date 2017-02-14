<?php

require_once './functions.php';
$user=new User();
$user=$user->getById(1);
$user->fname="anas";
$user->update();
echo $user->fname;
$user=new User();
$user->close();

echo sha1("ana");