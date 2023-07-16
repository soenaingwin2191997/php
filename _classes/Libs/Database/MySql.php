<?php

namespace Libs\Database;

use PDO;
use PDOException;

class MySql{
    private $db=null;
    private $dbhost;
    private $dbuser;
    private $dbname;
    private $dbpassword;

    public function __construct(
        $dbhost="localhost",
        $dbname="php",
        $dbuser="root",
        $dbpassword=""
    )
    {
        $this->dbhost=$dbhost;
        $this->dbname=$dbname;
        $this->dbuser=$dbuser;
        $this->dbpassword=$dbpassword;
    }

    public function connect(){
        try{
            return $this->db=new PDO("mysql:dbhost=$this->dbhost;dbname=$this->dbname",
            "$this->dbuser",
            "$this->dbpassword",
            [
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
            ]
            
            );
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}