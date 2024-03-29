<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4836f5e4b83c31db29842e7a92cb6149
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '65fec9ebcfbb3cbb4fd0d519687aea01' => __DIR__ . '/..' . '/danielstjules/stringy/src/Create.php',
        '4ceedf97791d93203e20d2cdee63c4d8' => __DIR__ . '/..' . '/funct/funct/src/Collection.php',
        '3fa95b6de8b4ba809a4086bd187dc285' => __DIR__ . '/..' . '/funct/funct/src/General.php',
        '9a6e6879c844337a8d58143b6e0512ae' => __DIR__ . '/..' . '/funct/funct/src/Invoke.php',
        'a73a3901d9218302158239badf0be56a' => __DIR__ . '/..' . '/funct/funct/src/Object.php',
        '3fdd7195df86076e7b28f4a0e5b97dbd' => __DIR__ . '/..' . '/funct/funct/src/Strings.php',
        'fe62ba7e10580d903cc46d808b5961a4' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/helpers.php',
        'caf31cc6ec7cf2241cb6f12c226c3846' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/alias.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tightenco\\Collect\\' => 18,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Translation\\' => 30,
            'Stringy\\' => 8,
        ),
        'F' => 
        array (
            'Funct\\' => 6,
        ),
        'D' => 
        array (
            'Ds\\' => 3,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tightenco\\Collect\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Collect',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Stringy\\' => 
        array (
            0 => __DIR__ . '/..' . '/danielstjules/stringy/src',
        ),
        'Funct\\' => 
        array (
            0 => __DIR__ . '/..' . '/funct/funct/src',
        ),
        'Ds\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ds/php-ds/src',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4836f5e4b83c31db29842e7a92cb6149::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4836f5e4b83c31db29842e7a92cb6149::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
