<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06634d22ee0614d10d5b00fd7b727bf8
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06634d22ee0614d10d5b00fd7b727bf8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06634d22ee0614d10d5b00fd7b727bf8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06634d22ee0614d10d5b00fd7b727bf8::$classMap;

        }, null, ClassLoader::class);
    }
}
