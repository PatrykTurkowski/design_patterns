<?php


class Singleton
{
    private static $singleton;

    private function __construct()
    {
    }

    protected function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Never do that! i'm singleton.");
    }

    public static function issetSingleton()
    {
        if (!isset(self::$singleton)) {
            self::$singleton = new Singleton;
        } else {
            return self::$singleton;
        }
    }
}

Singleton::issetSingleton();
Singleton::issetSingleton();
Singleton::issetSingleton();