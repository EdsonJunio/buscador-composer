<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc85a07bd79b0436fda4ea4bc6b6e736
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Edsonjunio\\BuscadorComposer\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Edsonjunio\\BuscadorComposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc85a07bd79b0436fda4ea4bc6b6e736::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc85a07bd79b0436fda4ea4bc6b6e736::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbc85a07bd79b0436fda4ea4bc6b6e736::$classMap;

        }, null, ClassLoader::class);
    }
}
