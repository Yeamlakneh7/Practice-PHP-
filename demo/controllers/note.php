<?php 

$header = "Note";

$config = require("config.php");

$db = new Database($config['database']);

$id = $_GET['id'];
$currentUser = 1;

$note = $db->query("SELECT * FROM notes where id=:id", ['id' => $id])->findOrAbort();

authenticate($note['user_id'] == $currentUser);



require "views/note.view.php";