<?php 

$header = "Note";

$config = require("config.php");

$db = new Database($config['database']);

$id = $_GET['id'];
$currentUser = 1;

$note = $db->query("SELECT * FROM notes where id=:id", ['id' => $id])->fetch();

if(!$note){
    abort();
}

if ($note['user_id'] !== $currentUser) {
    abort(Response::FORBIDDEN);
}


require "views/note.view.php";