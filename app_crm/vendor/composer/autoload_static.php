<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf51582c84a550104febb12606da6fa61
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Ti\\AppCrm\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ti\\AppCrm\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf51582c84a550104febb12606da6fa61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf51582c84a550104febb12606da6fa61::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf51582c84a550104febb12606da6fa61::$classMap;

        }, null, ClassLoader::class);
    }
}
