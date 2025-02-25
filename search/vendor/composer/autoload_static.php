<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf22e5bee4ff7929a2cb7f08cfa736542
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'J' => 
        array (
            'JobApis\\Jobs\\Client\\' => 20,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'JobApis\\Jobs\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/jobapis/jobs-careerbuilder/src',
            1 => __DIR__ . '/..' . '/jobapis/jobs-careercast/src',
            2 => __DIR__ . '/..' . '/jobapis/jobs-careerjet/src',
            3 => __DIR__ . '/..' . '/jobapis/jobs-common/src',
            4 => __DIR__ . '/..' . '/jobapis/jobs-dice/src',
            5 => __DIR__ . '/..' . '/jobapis/jobs-github/src',
            6 => __DIR__ . '/..' . '/jobapis/jobs-govt/src',
            7 => __DIR__ . '/..' . '/jobapis/jobs-ieee/src',
            8 => __DIR__ . '/..' . '/jobapis/jobs-indeed/src',
            9 => __DIR__ . '/..' . '/jobapis/jobs-jobinventory/src',
            10 => __DIR__ . '/..' . '/jobapis/jobs-jobs2careers/src',
            11 => __DIR__ . '/..' . '/jobapis/jobs-juju/src',
            12 => __DIR__ . '/..' . '/jobapis/jobs-monster/src',
            13 => __DIR__ . '/..' . '/jobapis/jobs-multi/src',
            14 => __DIR__ . '/..' . '/jobapis/jobs-stackoverflow/src',
            15 => __DIR__ . '/..' . '/jobapis/jobs-usajobs/src',
            16 => __DIR__ . '/..' . '/jobapis/jobs-ziprecruiter/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf22e5bee4ff7929a2cb7f08cfa736542::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf22e5bee4ff7929a2cb7f08cfa736542::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf22e5bee4ff7929a2cb7f08cfa736542::$classMap;

        }, null, ClassLoader::class);
    }
}
