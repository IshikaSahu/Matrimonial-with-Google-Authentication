<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd7c0ea70a50e7ce66f587e046054c9c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sonata\\GoogleAuthenticator\\' => 27,
        ),
        'G' => 
        array (
            'Google\\Authenticator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sonata\\GoogleAuthenticator\\' => 
        array (
            0 => __DIR__ . '/..' . '/sonata-project/google-authenticator/src',
        ),
        'Google\\Authenticator\\' => 
        array (
            0 => __DIR__ . '/..' . '/sonata-project/google-authenticator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd7c0ea70a50e7ce66f587e046054c9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd7c0ea70a50e7ce66f587e046054c9c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd7c0ea70a50e7ce66f587e046054c9c::$classMap;

        }, null, ClassLoader::class);
    }
}