<?php 

class Database {

    public $connection;
    

    function __construct($config){

        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, 'root', 'MySQL@1552', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    function query($query){
        
        $statement = $this->connection->prepare($query);
        
        $statement->execute();

        return $statement;
    }
    
}




















// class Database {

//     public $connection;

//     public function __construct($config, $username='root', $password='MySQL@1552'){


//         $dsn = 'mysql:' . http_build_query($config, '', ';');

//         $this->connection = new PDO($dsn, $username, $password, [
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

//     }

//     public function query($query, $params = []){
        
//         $statement = $this->connection->prepare($query);
        
//         $statement->execute($params);
        
//         return $statement;  

//     }

// }
