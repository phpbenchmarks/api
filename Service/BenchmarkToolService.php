<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Service;

class BenchmarkToolService
{
    const APACHE_BENCH = 'apache-bench';
    const SIEGE = 'siege';

    /** @return string[] */
    public static function getList()
    {
        return [
            static::APACHE_BENCH,
            static::SIEGE
        ];
    }

    /** @return string */
    public static function getDefault()
    {
        return static::APACHE_BENCH;
    }

    /** @return string */
    public static function getUrlParameterName()
    {
        return 'benchmarkTool';
    }
}
