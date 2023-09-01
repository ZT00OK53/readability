<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd8b1c8cc5ad09895f9b05236a82daac8
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd8b1c8cc5ad09895f9b05236a82daac8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd8b1c8cc5ad09895f9b05236a82daac8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd8b1c8cc5ad09895f9b05236a82daac8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}