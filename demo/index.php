<?php

require("functions.php");
// require("routes.php");
require("Database.php");

$config = require("config.php");

$db = new Database($config['database']);
$posts = $db->query('SELECT * from posts')->fetch();

dd($posts);
// foreach ($posts as $post) {
//     echo "<li>{$post['Title']}</li>";
// }