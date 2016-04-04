<?php

/**
 * User: harry
 * Date: 04/04/2016
 * Time: 19:41
 */
namespace backend\config\DBConfig;

// use classes what we need;
use PDO;
use PDOException;

class DBConfig{

    // Declare connection variables
    private $db_host = 'localhost';
    private $db_user = 'harry';
    private $db_pass = 'password';
    private $db_name = 'simple_blog_post';
    public $conn;

    public function connect(){
        try{
            // Make reference to PDO and pass in connection params
            $this->conn = new PDO("mysql:host={$this->db_host};dbname={$this->db_name}",$this->db_user,$this->db_pass);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Set Error Attributes
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $this->conn;
    }
    public function disconnect(){
        //Destroy PDO object by ensuring $conn reference to it is null
        $this->conn = null;
    }

}
