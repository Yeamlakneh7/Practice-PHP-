<?php 

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/demo/' => 'controllers/index.php',
    '/demo/about' => 'controllers/about.php',
    '/demo/notes' => 'controllers/notes.php',
    '/demo/note' => 'controllers/note.php',
    '/demo/contact' => 'controllers/contact.php',
];

function routeToController($url, $routes) {

    if (array_key_exists($url, $routes)) {
    
        require $routes[$url];
    
    } else{
      
        abort();

    }
}

function abort($code = 404) {
    
    http_response_code($code);

    if ($code == 403){
        require 'views/403.php';
    }
    
    else {
        require 'views/404.php';
    }
    die();

}

routeToController($url, $routes);