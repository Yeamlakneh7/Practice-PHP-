<?php

require("functions.php");

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/demo/' => 'controllers/index.php',
    '/demo/about' => 'controllers/about.php',
    '/demo/contact' => 'controllers/contact.php',
];

if (array_key_exists($url, $routes)) {
    require $routes[$url];
}
