<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23d86af824ae23bda5873e7963d32c75
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moneys\\Views\\' => 13,
            'Moneys\\Models\\' => 14,
            'Moneys\\Controllers\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moneys\\Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/views',
        ),
        'Moneys\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Moneys\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23d86af824ae23bda5873e7963d32c75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23d86af824ae23bda5873e7963d32c75::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23d86af824ae23bda5873e7963d32c75::$classMap;

        }, null, ClassLoader::class);
    }
}
