<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd24cc59f9edc1bc6bf059092955a881e
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

        spl_autoload_register(array('ComposerAutoloaderInitd24cc59f9edc1bc6bf059092955a881e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd24cc59f9edc1bc6bf059092955a881e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd24cc59f9edc1bc6bf059092955a881e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}