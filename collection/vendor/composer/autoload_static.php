<?php
namespace Composer\Autoload;
class ComposerStaticInit3de859d5b56fa2d82b78483df5118bf4
{
    public static $files = array (
        '3f8bdd3b35094c73a26f0106e3c0f8b2' => __DIR__ . '/../..' . '/lib/sendgrid.php',
        '9dda55337a76a24e949fbcc5d905a2c7' => __DIR__ . '/../..' . '/lib/helpers/cls_mail/cls_mail.php',
    );
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SendGrid\\' => 9,
        ),
    );
    public static $prefixDirsPsr4 = array (
        'SendGrid\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/php-http-user/lib',
        ),
    );
    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3de859d5b56fa2d82b78483df5118bf4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3de859d5b56fa2d82b78483df5118bf4::$prefixDirsPsr4;
        }, null, ClassLoader::class);
    }
}
