<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit386fbcc1df13268d89eb282668820c19
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit386fbcc1df13268d89eb282668820c19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit386fbcc1df13268d89eb282668820c19::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit386fbcc1df13268d89eb282668820c19::$classMap;

        }, null, ClassLoader::class);
    }
}
