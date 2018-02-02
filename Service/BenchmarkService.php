<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Service;

class BenchmarkService
{
    const HELLO_WORLD = 'hello-world';
    const REST_API = 'rest-api';

    /** @return int[] */
    public static function getList()
    {
        return [
            static::HELLO_WORLD,
            static::REST_API
        ];
    }

    /** @return ?int */
    public static function getDefault()
    {
        return null;
    }
}
