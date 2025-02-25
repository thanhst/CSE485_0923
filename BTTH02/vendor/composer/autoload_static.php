<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb356c82dff04b8d52b966929c4d6b9d4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb356c82dff04b8d52b966929c4d6b9d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb356c82dff04b8d52b966929c4d6b9d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb356c82dff04b8d52b966929c4d6b9d4::$classMap;

        }, null, ClassLoader::class);
    }
}
