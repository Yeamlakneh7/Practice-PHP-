<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

function authenticate($condition, $status = Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}

// function base_path($path) {
//     return BASE_PATH . $path;
// }

// function view($path) {
//     require base_path('views/' . $path);
// }