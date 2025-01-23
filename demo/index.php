<?php

require("functions.php");
// require("routes.php");

$dsn = "mysql:host=127.0.0.1;dbname=myapp;user=root;password=MySQL@1552;";

$pdo = new PDO($dsn);

$statement = $pdo->prepare('select * from posts');

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['Title']}</li>";
}