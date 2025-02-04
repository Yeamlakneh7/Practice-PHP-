<?php 

class Database {

    public $connection;

    public function __construct(){
        
        $dsn = "mysql:host=127.0.0.1;dbname=myapp;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'root', 'MySQL@1552', [
            PDO::ATTR_ERRMODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query){
        
        $statement = $this->connection->prepare($query);
        
        $statement->execute();
        
        return $statement;  

    }

}
