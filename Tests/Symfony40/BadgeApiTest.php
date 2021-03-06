<?php

namespace PhpBenchmarksApi\Tests\Symfony40;

use PhpBenchmarksApi\Api\BadgeApi;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\FrameworkService;
use PhpBenchmarksApi\Service\PhpVersionService;
use PhpBenchmarksApi\Tests\AbstractApiTestCase;

/**
 * @group BadgeApi
 * @group Symfony
 * @group Symfony40
 */
class BadgeApiTest extends AbstractApiTestCase
{
    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion71
     */
    public function testApacheBenchPhp71()
    {
        $badgeApi = $this->createBadgeApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_7_1);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion72
     */
    public function testApacheBenchPhp72()
    {
        $badgeApi = $this->createBadgeApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_7_2);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion71
     */
    public function testSiegePhp71()
    {
        $badgeApi = $this->createBadgeApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_7_1);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion72
     */
    public function testSiegePhp72()
    {
        $badgeApi = $this->createBadgeApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_7_2);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(0, strlen($data));
    }

    /** @return BadgeApi */
    protected function createBadgeApi($benchmarkTool, $phpVersion)
    {
        return (new BadgeApi($this->getToken()))
            ->setBenchmarkTool($benchmarkTool)
            ->setPhpVersion($phpVersion)
            ->setComponentVersion(FrameworkService::SYMFONY_4_0);
    }
}
