<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit83aef14185d8698f16a28a2e0b307552
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

        spl_autoload_register(array('ComposerAutoloaderInit83aef14185d8698f16a28a2e0b307552', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit83aef14185d8698f16a28a2e0b307552', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit83aef14185d8698f16a28a2e0b307552::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
