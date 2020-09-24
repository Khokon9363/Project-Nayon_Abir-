<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54e809cc6dd84596b23705946d886abe
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54e809cc6dd84596b23705946d886abe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54e809cc6dd84596b23705946d886abe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
