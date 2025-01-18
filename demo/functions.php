<?php

function dd($value) {
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}

function urlIs($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}
