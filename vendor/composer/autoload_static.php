<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88d3f818970f230512f9c79695d15aba
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88d3f818970f230512f9c79695d15aba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88d3f818970f230512f9c79695d15aba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88d3f818970f230512f9c79695d15aba::$classMap;

        }, null, ClassLoader::class);
    }
}
