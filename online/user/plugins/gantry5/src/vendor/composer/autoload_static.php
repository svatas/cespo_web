<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit873baf9c3d5f450680b09918cdf242f1
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
        'G' => 
        array (
            'Gantry\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/Leafo/ScssPhp',
            1 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
        'Gantry\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/Gantry',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit873baf9c3d5f450680b09918cdf242f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit873baf9c3d5f450680b09918cdf242f1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
