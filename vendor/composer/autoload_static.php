<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb019b0865640afdd5c5a3aecbb84ebe
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'odilov\\hello\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'odilov\\hello\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb019b0865640afdd5c5a3aecbb84ebe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb019b0865640afdd5c5a3aecbb84ebe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
