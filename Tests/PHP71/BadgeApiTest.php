<?php

namespace PhpBenchmarksApi\Tests\PHP71;

use PhpBenchmarksApi\Api\BadgeApi;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\PhpVersionService;
use PhpBenchmarksApi\Tests\AbstractApiTestCase;

/**
 * @group BadgeApi
 * @group Php
 * @group Php71
 */
class BadgeApiTest extends AbstractApiTestCase
{
    /**
     * @group BenchmarkToolApacheBench
     */
    public function testApacheBench()
    {
        $badgeApi = $this->createBadgeApi(BenchmarkToolService::APACHE_BENCH);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     */
    public function testSiege()
    {
        $badgeApi = $this->createBadgeApi(BenchmarkToolService::SIEGE);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(0, strlen($data));
    }

    /** @return BadgeApi */
    protected function createBadgeApi($benchmarkTool)
    {
        return (new BadgeApi($this->getToken()))
            ->setBenchmarkTool($benchmarkTool)
            ->setPhpVersion(PhpVersionService::VERSION_7_1);
    }
}
