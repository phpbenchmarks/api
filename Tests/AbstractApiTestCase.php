<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Tests;

use PhpBenchmarksApi\Api\ApiInterface;
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

    /** @return string */
    protected function getToken()
    {
        $return = require __DIR__ . '/Token.php';
        if ($return == null) {
            throw new \Exception('You have to write your phpbenchmarks api token in Token.php');
        }

        return $return;
    }
}
