<?php

namespace Core;

class Session
{
    public static function start(): void
    {
        session_start();
    }

    public static function has($key): bool
    {
        return (bool) static::get($key);
    }

    public static function put($key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null): mixed
    {
        if (isset($_SESSION['_flash'][$key])) {
            return $_SESSION['_flash'][$key];
        }

        return $_SESSION[$key] ?? $default;
    }

    public static function flash($key, $value): void
    {
        $_SESSION['_flash'][$key] = $value;
    }

    public static function flush(): void
    {
        $_SESSION = [];
    }

    public static function forget(): void
    {
        unset($_SESSION['_flash']);
    }

    public static function destory():void
    {
        static::flush();
        session_destroy();
        
        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600);
    }
}