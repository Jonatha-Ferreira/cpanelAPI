<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59054005c98e8ae0fbce0130003ee75b
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hostjams\\Cpanel\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hostjams\\Cpanel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59054005c98e8ae0fbce0130003ee75b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59054005c98e8ae0fbce0130003ee75b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
