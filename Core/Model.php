<?php
namespace Core;

class Model extends \PDO
{
    public function __construct(){
        $config = C("database.mysql");
        try{
            parent::__construct($config['dsn'], $config['username'], $config['password']);
        }catch(\PDOException $e){
            echo 'Connection failed:' . $e->getMessage(); 
        }
    }
}
