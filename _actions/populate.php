<?php

include("../vendor/autoload.php");

use Faker\Factory as Faker;
use Libs\Database\MySql;
use Libs\Database\UserTable;

$faker=Faker::create();

$table=new UserTable(new MySql());

for($i=0;$i<20;$i++){
    $table->create([
        'name'=>$faker->name(),
        'email'=>$faker->email(),
        'phone'=>$faker->phoneNumber(),
        'address'=>$faker->address(),
        'password'=>"password"
    ]);
}

echo "Data population Done........";