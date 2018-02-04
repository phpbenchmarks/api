<?php

namespace PhpBenchmarksApi\Tests\PHP72;

use PhpBenchmarksApi\Api\TableApi;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\PhpVersionService;
use PhpBenchmarksApi\Tests\AbstractApiTestCase;

/**
 * @group TableApi
 * @group Php
 * @group Php72
 */
class TableApiTest extends AbstractApiTestCase
{
    /**
     * @group BenchmarkToolApacheBench
     */
    public function testApacheBenchPhp72()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::APACHE_BENCH);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     */
    public function testSiegePhp72()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::SIEGE);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /** @return TableApi */
    protected function createTableApi($benchmarkTool)
    {
        return (new TableApi($this->getToken()))
            ->setBenchmarkTool($benchmarkTool)
            ->setPhpVersion(PhpVersionService::VERSION_7_2);
    }
}
