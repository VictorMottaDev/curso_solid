<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64fd0bc3cb77696ec16efaf355a526fe
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64fd0bc3cb77696ec16efaf355a526fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64fd0bc3cb77696ec16efaf355a526fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64fd0bc3cb77696ec16efaf355a526fe::$classMap;

        }, null, ClassLoader::class);
    }
}