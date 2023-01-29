<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4dc3105d8bd8438c75a8a3a631ce4d08
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4dc3105d8bd8438c75a8a3a631ce4d08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4dc3105d8bd8438c75a8a3a631ce4d08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4dc3105d8bd8438c75a8a3a631ce4d08::$classMap;

        }, null, ClassLoader::class);
    }
}