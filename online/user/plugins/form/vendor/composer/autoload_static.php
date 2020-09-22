<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9f2f96e3ad6fd86ce688af0527a1d7b
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'G' => 
        array (
            'Grav\\Plugin\\Form\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Grav\\Plugin\\Form\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Grav\\Plugin\\FormPlugin' => __DIR__ . '/../..' . '/form.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9f2f96e3ad6fd86ce688af0527a1d7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9f2f96e3ad6fd86ce688af0527a1d7b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9f2f96e3ad6fd86ce688af0527a1d7b::$classMap;

        }, null, ClassLoader::class);
    }
}
