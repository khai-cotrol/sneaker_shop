<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf56a3ddd96164998b6e5acf7a99c6870
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/APP/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf56a3ddd96164998b6e5acf7a99c6870::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf56a3ddd96164998b6e5acf7a99c6870::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
