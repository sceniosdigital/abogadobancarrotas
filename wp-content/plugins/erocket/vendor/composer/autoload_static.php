<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80194c8cafab4f225f98b27d9c101480
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ERocket\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ERocket\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80194c8cafab4f225f98b27d9c101480::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80194c8cafab4f225f98b27d9c101480::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80194c8cafab4f225f98b27d9c101480::$classMap;

        }, null, ClassLoader::class);
    }
}
