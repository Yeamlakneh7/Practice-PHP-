<?php

require("functions.php");
// require("routes.php");
require("Database.php");

$config = require("config.php");

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "SELECT * FROM posts where id = ?";

$posts = $db->query($query, [$id])->fetch();




// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }

dd($posts);