<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit893717c20e1e2a2e812ece9a6169d294
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Davidmgilo\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Davidmgilo\\' => 
        array (
            0 => __DIR__ . '/..' . '/davidmgilo/hello-world-package/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit893717c20e1e2a2e812ece9a6169d294::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit893717c20e1e2a2e812ece9a6169d294::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
