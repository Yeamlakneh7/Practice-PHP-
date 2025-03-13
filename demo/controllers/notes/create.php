<?php 

$header = "Create Note";

require "Validator.php";

$config = require("config.php");

$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $error = [];

    if (!Validator::string($_POST['body'], 1, 100)) {
        $error['body'] = "Note body less than 100 characters is required !";
    }

    if (empty($error['body'])) {
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);

}

}

require "views/notes/create.view.php";