<?php

use Core\Response;

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/elements/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }
}

function base_path(string $path): string
{
    return BASE_PATH . $path;
}

function urlIs(string $value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}