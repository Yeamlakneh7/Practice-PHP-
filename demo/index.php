<?php

require("functions.php");

$uri = dd($_SERVER['REQUEST_URI']);

if ($uri === '/phpProject/demo/controllers/') {
    require("controllers/index.php");
} else if ($uri === '/phpProject/demo/controllers/about') {
    require("controllers/about.php");
} else if ($uri === '/phpProject/demo/controllers/contact') {
    require("controllers/contact.php");
}
