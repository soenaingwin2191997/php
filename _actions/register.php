<?php

use Helpers\HTTP;
use Libs\Database\MySql;
use Libs\Database\UserTable;

include("../vendor/autoload.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$table=new UserTable(new MySql());

$table->register([
    'name'=>$name,
    'email'=>$email,
    'phone'=>$phone,
    'password'=>$password,
    'address'=>$address
]);

HTTP::redrect("index.php","message=Login Register Success, login");