<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit093972c105d85428bfde0fc6064bc747
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/..' . '/SON',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit093972c105d85428bfde0fc6064bc747::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit093972c105d85428bfde0fc6064bc747::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
