<?php

require("functions.php");
// require("routes.php");
require("Database.php");

$config = require("config.php");

$db = new Database($config['database']);

$id = ($_GET['id']);

$posts = $db->query("SELECT * from users where id = $id ")->fetch();


dd($posts);
