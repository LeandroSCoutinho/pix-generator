<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit311170b7ff4627de1ce40786c25d72b1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit311170b7ff4627de1ce40786c25d72b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit311170b7ff4627de1ce40786c25d72b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit311170b7ff4627de1ce40786c25d72b1::$classMap;

        }, null, ClassLoader::class);
    }
}