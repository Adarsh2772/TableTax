<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbcddd9b0a1aa1c0a6f35fc9c91257f55
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbcddd9b0a1aa1c0a6f35fc9c91257f55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbcddd9b0a1aa1c0a6f35fc9c91257f55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbcddd9b0a1aa1c0a6f35fc9c91257f55::$classMap;

        }, null, ClassLoader::class);
    }
}