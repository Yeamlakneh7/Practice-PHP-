<?php

require("functions.php");

if ($_SERVER['REQUEST_URI'] === "/demo/") {
    require "controllers/index.php";
} elseif ($_SERVER['REQUEST_URI'] === "/demo/about") {
    require "controllers/about.php";
} elseif ($_SERVER['REQUEST_URI'] === "/demo/contact") {
    require "controllers/contact.php";
} else {
    echo "404 Not Found";
}

$uri = dd($_SERVER);
