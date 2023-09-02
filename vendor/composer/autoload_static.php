<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb90f80d5f40da3f62719c63a13fcbd82
{
    public static $files = array (
        'ec9227414c0fafceed94f49f8cfa892c' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jaropackeds\\Boxess\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jaropackeds\\Boxess\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Boxess',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb90f80d5f40da3f62719c63a13fcbd82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb90f80d5f40da3f62719c63a13fcbd82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb90f80d5f40da3f62719c63a13fcbd82::$classMap;

        }, null, ClassLoader::class);
    }
}
