<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit886203d6f3a46cb7005b12217e2636c1
{
    public static $files = array (
        '3109cb1a231dcd04bee1f9f620d46975' => __DIR__ . '/..' . '/paragonie/sodium_compat/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pusher\\' => 7,
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pusher\\' => 
        array (
            0 => __DIR__ . '/..' . '/pusher/pusher-php-server/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit886203d6f3a46cb7005b12217e2636c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit886203d6f3a46cb7005b12217e2636c1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
