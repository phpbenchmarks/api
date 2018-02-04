<?php

namespace PhpBenchmarksApi\Tests\Laravel54;

use PhpBenchmarksApi\Api\SummaryApi;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\FrameworkService;
use PhpBenchmarksApi\Service\PhpVersionService;
use PhpBenchmarksApi\Tests\AbstractApiTestCase;

/**
 * @group SummaryApi
 * @group Laravel
 * @group Laravel54
 */
class SummaryApiTest extends AbstractApiTestCase
{
    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion56
     */
    public function testApacheBenchPhp56()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_5_6);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion70
     */
    public function testApacheBenchPhp70()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_7_0);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion71
     */
    public function testApacheBenchPhp71()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_7_1);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion72
     */
    public function testApacheBenchPhp72()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_7_2);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion56
     */
    public function testSiegePhp56()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_5_6);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion70
     */
    public function testSiegePhp70()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_7_0);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion71
     */
    public function testSiegePhp71()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_7_1);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion72
     */
    public function testSiegePhp72()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_7_2);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /** @return SummaryApi */
    protected function createSummaryApi($benchmarkTool, $phpVersion)
    {
        return (new SummaryApi($this->getToken()))
            ->setBenchmarkTool($benchmarkTool)
            ->setPhpVersion($phpVersion)
            ->setComponentVersion(FrameworkService::LARAVEL_5_4);
    }
}