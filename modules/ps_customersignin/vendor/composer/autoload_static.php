<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ed8bca746aeac070c93ad2e4da4f382
{
    public static $classMap = array (
        'Ps_CustomerSignIn' => __DIR__ . '/../..' . '/ps_customersignin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7ed8bca746aeac070c93ad2e4da4f382::$classMap;

        }, null, ClassLoader::class);
    }
}