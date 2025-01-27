<?php

require("functions.php");
// require("routes.php");

class Database {

    public $connection;

    public function __construct(){
        
        $dsn = "mysql:host=127.0.0.1;dbname=myapp;user=root;password=MySQL@1552;";

        $this->connection = new PDO($dsn);

    }

    public function query($query){
        
        $statement = $this->connection->prepare($query);
        
        $statement->execute();
        
        return $statement;  

    }

}

$db = new Database();
$posts = $db->query('SELECT * from posts where id = 1')->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['Title']}</li>";
}