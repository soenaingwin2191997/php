<?php

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySql;
use Libs\Database\UserTable;

include ("../vendor/autoload.php");

$auth=Auth::check();

$table=new UserTable(new MySql());
$name=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
$type=$_FILES['photo']['type'];

$id=$auth->id;

if($type=='image/jpg' or $type=='image/png' or $type=='image/jpeg'){
    move_uploaded_file($tmp,"photos/$name");

    $table->upload($id,$name);
    $auth->photo=$name;

    HTTP::redrect('profile.php');

}else{
    HTTP::redrect('profile.php','message=error');
}