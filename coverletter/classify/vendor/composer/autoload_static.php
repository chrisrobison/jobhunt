<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00a3ee9a8c13c12cbdd810d6f5040802
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit00a3ee9a8c13c12cbdd810d6f5040802::$classMap;

        }, null, ClassLoader::class);
    }
}
