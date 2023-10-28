<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0963396dc8ed5b586519292880173f46
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
        'App\\CarrinhoCompra' => __DIR__ . '/../..' . '/src/CarrinhoCompra.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0963396dc8ed5b586519292880173f46::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0963396dc8ed5b586519292880173f46::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0963396dc8ed5b586519292880173f46::$classMap;

        }, null, ClassLoader::class);
    }
}
