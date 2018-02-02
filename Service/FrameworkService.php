<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Service;

class FrameworkService
{
    const SYMFONY_2_3 = 'symfony-2.3';
    const SYMFONY_2_4 = 'symfony-2.4';
    const SYMFONY_2_5 = 'symfony-2.5';
    const SYMFONY_2_6 = 'symfony-2.6';
    const SYMFONY_2_7 = 'symfony-2.7';
    const SYMFONY_2_8 = 'symfony-2.8';
    const SYMFONY_3_0 = 'symfony-3.0';
    const SYMFONY_3_1 = 'symfony-3.1';
    const SYMFONY_3_2 = 'symfony-3.2';
    const SYMFONY_3_3 = 'symfony-3.3';
    const SYMFONY_3_4 = 'symfony-3.4';
    const SYMFONY_4_0 = 'symfony-4.0';

    const ZEND_FRAMEWORK_3_0 = 'zend-framework-3.0';

    const LARAVEL_5_1 = 'laravel-5.1';
    const LARAVEL_5_2 = 'laravel-5.2';
    const LARAVEL_5_3 = 'laravel-5.3';
    const LARAVEL_5_4 = 'laravel-5.4';
    const LARAVEL_5_5 = 'laravel-5.5';

    const CAKE_PHP_3_5 = 'cake-php-3.5';

    /** @return string[] */
    public static function getList()
    {
        return [
            static::SYMFONY_2_3,
            static::SYMFONY_2_4,
            static::SYMFONY_2_5,
            static::SYMFONY_2_6,
            static::SYMFONY_2_7,
            static::SYMFONY_2_8,
            static::SYMFONY_3_0,
            static::SYMFONY_3_1,
            static::SYMFONY_3_2,
            static::SYMFONY_3_3,
            static::SYMFONY_3_4,
            static::SYMFONY_4_0,

            static::ZEND_FRAMEWORK_3_0,

            static::LARAVEL_5_1,
            static::LARAVEL_5_2,
            static::LARAVEL_5_3,
            static::LARAVEL_5_4,
            static::LARAVEL_5_5,

            static::CAKE_PHP_3_5
        ];
    }
}
