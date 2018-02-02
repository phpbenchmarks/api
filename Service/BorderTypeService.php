<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Service;

class BorderTypeService
{
    const RECT = 1;
    const ROUNDED = 2;

    /** @return int[] */
    public static function getList()
    {
        return [
            static::RECT,
            static::ROUNDED
        ];
    }

    /** @return int */
    public static function getDefault()
    {
        return static::RECT;
    }
}
