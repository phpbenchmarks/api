<?php

namespace PhpBenchmarksApi\Tests\PHP71;

use PhpBenchmarksApi\Api\TableApi;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\PhpVersionService;
use PhpBenchmarksApi\Tests\AbstractApiTestCase;

/**
 * @group TableApi
 * @group Php
 * @group Php71
 */
class TableApiTest extends AbstractApiTestCase
{
    /**
     * @group BenchmarkToolApacheBench
     */
    public function testApacheBench()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::APACHE_BENCH);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     */
    public function testSiege()
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
            ->setPhpVersion(PhpVersionService::VERSION_7_1);
    }
}
