<?php

use Helpers\HTTP;
use Libs\Database\MySql;
use Libs\Database\UserTable;

include ("../vendor/autoload.php");

$email=$_POST['email'];
$password=$_POST['password'];

$table=new UserTable(new MySql()); 
$user=$table->findEmailAndPassword($email,$password);

if($user){
    session_start();
    $_SESSION['user']=$user;
    HTTP::redrect('admin.php');
}else{
    HTTP::redrect("index.php","message=Login Fail");
}