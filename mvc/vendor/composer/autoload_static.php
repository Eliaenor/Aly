<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit519890eeaeb72144a379fc0c8038e0f0
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
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit519890eeaeb72144a379fc0c8038e0f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit519890eeaeb72144a379fc0c8038e0f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit519890eeaeb72144a379fc0c8038e0f0::$classMap;

        }, null, ClassLoader::class);
    }
}
