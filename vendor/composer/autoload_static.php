<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98055a28c74586deaac2d08d5cadc8fb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Petrik\\PivarcsiGergelyMate\\Halloween\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Petrik\\PivarcsiGergelyMate\\Halloween\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit98055a28c74586deaac2d08d5cadc8fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98055a28c74586deaac2d08d5cadc8fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98055a28c74586deaac2d08d5cadc8fb::$classMap;

        }, null, ClassLoader::class);
    }
}
