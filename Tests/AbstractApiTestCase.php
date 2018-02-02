<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Tests;

use PhpBenchmarksApi\Behavior\ApiInterface;
use PHPUnit\Framework\TestCase;

abstract class AbstractApiTestCase extends TestCase
{
    /**
     * @param ApiInterface $api
     * @param string $data
     * @param string $expectedDataFileName
     */
    protected static function assertApiErrors($api)
    {
        static::assertFalse($api->hasErrors());
        static::assertEquals(0, count($api->getErrors()));
    }
}
