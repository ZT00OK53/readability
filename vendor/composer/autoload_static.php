<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8b1c8cc5ad09895f9b05236a82daac8
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zehntech\\Readability\\' => 21,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'L' => 
        array (
            'League\\Uri\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zehntech\\Readability\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
            1 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'League\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/uri-interfaces/src',
            1 => __DIR__ . '/..' . '/league/uri/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8b1c8cc5ad09895f9b05236a82daac8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8b1c8cc5ad09895f9b05236a82daac8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8b1c8cc5ad09895f9b05236a82daac8::$classMap;

        }, null, ClassLoader::class);
    }
}