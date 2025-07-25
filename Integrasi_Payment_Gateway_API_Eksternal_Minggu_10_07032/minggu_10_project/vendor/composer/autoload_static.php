<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b4629edb262de398298c164cabe1400
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SnapBi\\' => 7,
        ),
        'M' => 
        array (
            'Midtrans\\' => 9,
        ),
        'A' => 
        array (
            'Asus\\Minggu10\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SnapBi\\' => 
        array (
            0 => __DIR__ . '/..' . '/midtrans/midtrans-php/SnapBi',
        ),
        'Midtrans\\' => 
        array (
            0 => __DIR__ . '/..' . '/midtrans/midtrans-php/Midtrans',
        ),
        'Asus\\Minggu10\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b4629edb262de398298c164cabe1400::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b4629edb262de398298c164cabe1400::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b4629edb262de398298c164cabe1400::$classMap;

        }, null, ClassLoader::class);
    }
}
