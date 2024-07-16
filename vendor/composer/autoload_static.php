<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93710023f29ada75ac4b0dc4850f5f3c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93710023f29ada75ac4b0dc4850f5f3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93710023f29ada75ac4b0dc4850f5f3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93710023f29ada75ac4b0dc4850f5f3c::$classMap;

        }, null, ClassLoader::class);
    }
}
