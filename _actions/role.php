<?php

use Helpers\HTTP;
use Libs\Database\MySql;
use Libs\Database\UserTable;

include ("../vendor/autoload.php");

$table=new UserTable(new MySql());

$id=$_GET['id'];
$role=$_GET['role'];

$table->role($id,$role);

HTTP::redrect("admin.php");