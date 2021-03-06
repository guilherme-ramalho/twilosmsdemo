<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite84124b05f23cb1c6048eb4251a9a65f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite84124b05f23cb1c6048eb4251a9a65f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite84124b05f23cb1c6048eb4251a9a65f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
