<?php

function dd($value) {
    var_dump($value);
}

function abort($code = 404) {
    http_response_code($code);
    require "views/elements/{$code}.php";
    die();
}