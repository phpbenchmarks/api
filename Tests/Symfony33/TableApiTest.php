<?php

namespace PhpBenchmarksApi\Tests\Symfony33;

use PhpBenchmarksApi\Api\TableApi;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\FrameworkService;
use PhpBenchmarksApi\Service\PhpVersionService;
use PhpBenchmarksApi\Tests\AbstractApiTestCase;

/**
 * @group TableApi
 * @group Symfony
 * @group Symfony33
 */
class TableApiTest extends AbstractApiTestCase
{
    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion56
     */
    public function testApacheBenchPhp56()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_5_6);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion70
     */
    public function testApacheBenchPhp70()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_7_0);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion71
     */
    public function testApacheBenchPhp71()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_7_1);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolApacheBench
     * @group PhpVersion72
     */
    public function testApacheBenchPhp72()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::APACHE_BENCH, PhpVersionService::VERSION_7_2);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion56
     */
    public function testSiegePhp56()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_5_6);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion70
     */
    public function testSiegePhp70()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_7_0);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion71
     */
    public function testSiegePhp71()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_7_1);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /**
     * @group BenchmarkToolSiege
     * @group PhpVersion72
     */
    public function testSiegePhp72()
    {
        $tableApi = $this->createTableApi(BenchmarkToolService::SIEGE, PhpVersionService::VERSION_7_2);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals(0, strlen($data));
    }

    /** @return TableApi */
    protected function createTableApi($benchmarkTool, $phpVersion)
    {
        return (new TableApi($this->getToken()))
            ->setBenchmarkTool($benchmarkTool)
            ->setPhpVersion($phpVersion)
            ->setComponentVersion(FrameworkService::SYMFONY_3_3);
    }
}