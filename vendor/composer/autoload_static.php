<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f6c13861bbf856d5ead70c91ac60e28
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SRC\\' => 4,
        ),
        'M' => 
        array (
            'MVC\\' => 4,
        ),
        'A' => 
        array (
            'ADMIN\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SRC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'ADMIN\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/admin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f6c13861bbf856d5ead70c91ac60e28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f6c13861bbf856d5ead70c91ac60e28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f6c13861bbf856d5ead70c91ac60e28::$classMap;

        }, null, ClassLoader::class);
    }
}
