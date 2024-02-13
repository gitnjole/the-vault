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

function login(array $user): void
{
    $_SESSION['user'] = [
        'username' => $user['username'],
        'user_id' => $user['user_id']
    ];

    session_regenerate_id();
}

function logout(): void
{
    $_SESSION = [];
    session_destroy();
    
    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600);
}

function base_path(string $path): string
{
    return BASE_PATH . $path;
}

function view(string $path,$attributes = [])
{
    extract($attributes);

    require base_path('views/' .$path. '.view.php');
}

function urlIs(string $value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}