<?php

namespace PhpBenchmarksApi\Tests\PHP56;

use PhpBenchmarksApi\Api\SummaryApi;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\PhpVersionService;
use PhpBenchmarksApi\Tests\AbstractApiTestCase;

/**
 * @group SummaryApi
 * @group Php
 * @group Php56
 */
class SummaryApiTest extends AbstractApiTestCase
{
    /**
     * @group BenchmarkToolApacheBench
     */
    public function testApacheBench()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::APACHE_BENCH);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     */
    public function testSiege()
    {
        $summaryApi = $this->createSummaryApi(BenchmarkToolService::SIEGE);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals(0, strlen($data));
    }

    /** @return SummaryApi */
    protected function createSummaryApi($benchmarkTool)
    {
        return (new SummaryApi($this->getToken()))
            ->setBenchmarkTool($benchmarkTool)
            ->setPhpVersion(PhpVersionService::VERSION_5_6);
    }
}
