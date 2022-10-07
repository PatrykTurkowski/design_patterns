<?php


class Singleton
{
    private static $isActiveSingleton;

    private function __construct()
    {
        echo 'I\'m singleton, hello';
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
        if (!isset(self::$isActiveSingleton)) {
            self::$isActiveSingleton = new Singleton;
        } else {
            return self::$isActiveSingleton;
        }
    }
}

Singleton::issetSingleton();
Singleton::issetSingleton();
Singleton::issetSingleton();