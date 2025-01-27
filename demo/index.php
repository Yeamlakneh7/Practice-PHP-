<?php

require("functions.php");
// require("routes.php");
require("Database.php");

$db = new Database();
$posts = $db->query('SELECT * from posts')->fetch(PDO::FETCH_ASSOC);

dd($posts['Title']);
// foreach ($posts as $post) {
//     echo "<li>{$post['Title']}</li>";
// }