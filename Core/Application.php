<?php

namespace Core;

class Application
{
    protected static $container = null;

    public static function setContainer($container)
    {  
        static::$container = $container;
    }

    public static function getContainer()
    {
        if (is_null(static::$container)) {
            throw new \Exception("Container not set.");
        }

        return static::$container;
    }

    public static function bind($key, $resolver)
    {
        static::getContainer()->bind($key, $resolver);
    }
    
    public static function resolve($key)
    {
        return static::getContainer()->resolve($key);
    }
}