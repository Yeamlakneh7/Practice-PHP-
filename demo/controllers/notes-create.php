<?php 

$header = "Create Note";

$config = require("config.php");

$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $error = [];

    if (strlen($_POST['body']) === 0) {
        $error['body'] = "Note body is required";
    }
    
    if (strlen($_POST['body']) > 100) {
        $error['body'] = "The body can not be more than 100 characters";
    }

    if (empty($error['body'])) {
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);

}

}

require "views/notes-create.view.php";