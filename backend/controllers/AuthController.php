<?php

/**
 * User: harry
 * Date: 04/04/2016
 * Time: 19:40
 */
namespace backend\controllers\AuthController;

// use classes what we need;
use backend\config\DBConfig\DBConfig;
use PDOException;

class AuthController
{
    private $connect;

    function __construct()
    {
        $dbConfig = new DBConfig();
        $this->connect = $dbConfig->connect();
    }

    function registerUser($username, $password){
        try{
            $stmt = $this->connect->prepare("INSERT INTO users(username,password) VALUES(:username, :password)");
            $stmt->bindparam(":username",$username);
            $stmt->bindparam(":password",$password);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function loginUser($username, $password){

    }

    function getUserById($userId){

    }

    function resetPassword($oldPassword, $newPassword){

    }
}