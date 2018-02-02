<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Service;

class PhpVersionService
{
    const VERSION_5_6 = 'php-5.6';
    const VERSION_7_0 = 'php-7.0';
    const VERSION_7_1 = 'php-7.1';
    const VERSION_7_2 = 'php-7.2';

    /** @return string[] */
    public static function getList()
    {
        return [
            static::VERSION_5_6,
            static::VERSION_7_0,
            static::VERSION_7_1,
            static::VERSION_7_2
        ];
    }

    /** @return string */
    public static function getDefault()
    {
        return static::VERSION_7_2;
    }

    /** @return string */
    public static function getUrlParameterName()
    {
        return 'phpVersion';
    }
}
