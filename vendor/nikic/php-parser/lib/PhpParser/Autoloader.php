<?php

namespace PhpParser;

/**
 * @codeCoverageIgnore
 */
class Autoloader
{
    /** @var bool Whether the autoloader has been registered. */
    private static $registered = false;

    /**
     * Registers PhpParser\Autoloader as an SPL autoloader.
     *
     * @param bool $prepend Whether to prepend the autoloader instead of appending
     */
    static public function register($prepend = false) {
        if (self::$registered === true) {
            return;
        }

        spl_autoload_register(array(__CLASS__, 'autoload'), true, $prepend);
        self::$registered = true;
    }

    /**
     * Handles autoloading of classes.
     *
     * @param string $class A class name.
     */
    static public function autoload($class) {
        if (0 === strpos($class, 'PhpParser\\')) {
<<<<<<< HEAD
            $fileName = __DIR__ . strtr(substr($class, 9), '\\', '/') . '.php';
=======
            $fileName = dirname(__DIR__) . '/' . strtr($class, '\\', '/') . '.php';
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
            if (file_exists($fileName)) {
                require $fileName;
            }
        }
    }
}
