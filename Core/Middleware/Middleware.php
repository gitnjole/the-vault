<?php

namespace Core\Middleware;

class Middleware
{
    private const MIDDLEWARE_MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class
    ];

    public static function resolve($key)
    {
        if (! $key) {
            return;
        }

        $middleware = static::MIDDLEWARE_MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("No matching middleware found for {$key}");
        }

        (new $middleware)->handle();
    }
}