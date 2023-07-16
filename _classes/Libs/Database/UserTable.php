<?php 

namespace Libs\Database;

use Libs\Database\MySql;

class UserTable{
    private $db;
    public function __construct(MySql $mySql)
    {
        $this->db=$mySql->connect();
    }

    public function create($data){
        $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);
        $statement=$this->db->prepare("INSERT INTO users (name,email,phone,address,password,created_at) VALUES (:name,:email,:phone,:address,:password,NOW())");
        $statement->execute($data);

        return $this->db->lastInsertId();
    }

    public function register($data){
        $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);
        $statement=$this->db->prepare("INSERT INTO users (name,email,phone,address,password,created_at) VALUES (:name,:email,:phone,:address,:password,NOW())");
        $statement->execute($data);

        return $this->db->lastInsertId();
    }

    public function upload($id,$photo){
        $statement=$this->db->prepare("UPDATE users SET photo=:photo WHERE id=:id");
        $statement->execute(['photo'=>$photo,'id'=>$id]);

        return $statement->rowCount();
    }

    public function findEmailAndPassword($email,$password){
        $statement=$this->db->prepare("SELECT * FROM users WHERE email=:email");
        $statement->execute(['email'=>$email]);

        $user=$statement->fetch();

        if(password_verify($password,$user->password)){
            return $user;
        }
        return false;
    }

    public function userGetAll(){
        $statement=$this->db->query("SELECT users.*, roles.name AS role FROM users LEFT JOIN roles ON users.role_id = roles.value ORDER BY users.id ASC");

        return $statement->fetchAll();
    }

    public function delete($id){
        $statement=$this->db->prepare("DELETE FROM users WHERE id=:id");
        $statement->execute(['id'=>$id]);

        return $statement->rowCount();
    }

    public function suspend($id){
        $statement=$this->db->prepare("UPDATE users SET suspended=1 WHERE id=:id");
        $statement->execute(['id'=>$id]);

        return $statement->rowCount();
    }

    public function unsuspend($id){
        $statement=$this->db->prepare("UPDATE users SET suspended=0 WHERE id=:id");
        $statement->execute(['id'=>$id]);

        return $statement->rowCount();
    }

    public function role($id,$role){
        $statement=$this->db->prepare("UPDATE users SET role_id=:role WHERE id=:id");
        $statement->execute(['id'=>$id,'role'=>$role]);

        return $statement->rowCount();
    }
}