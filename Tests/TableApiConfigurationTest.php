<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Tests;

use PhpBenchmarksApi\Api\TableApi;
use PhpBenchmarksApi\Service\BenchmarkService;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\BorderTypeService;
use PhpBenchmarksApi\Service\PhpVersionService;

/**
 * @group TableApi
 * @group TableApiConfiguration
 */
final class TableApiConfigurationTest extends AbstractApiTestCase
{
    public function testDefault()
    {
        $tableApi = new TableApi($this->getToken());
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/default'));
    }

    public function testConfiguration()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setBackgroundColor('aabbff')
            ->setFontColor('ffaabb')
            ->setScoreBackgroundColor('aabbff')
            ->setScoreFontColor('ffaabb')
            ->setPositionBackgroundColor('aabbff')
            ->setPositionFontColor('ffaabb')
            ->setTableBorderColor('ffbbaa')
            ->setTableHeaderBackgroundColor('aabbff')
            ->setTableHeaderBorderColor('ffbbaa')
            ->setTableHeaderFontColor('ffaabb')
            ->setTableLineBackgroundColor('aabbff')
            ->setTableLineFontColor('ffaabb')
            ->setTableLineAlternateBackgroundColor('aaccff')
            ->setTableLineAlternateFontColor('ffaacc')
            ->setLegendFontColor('ffaabb');
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/configuration'));
    }

    /**
     * @group BenchmarkToolApacheBench
     */
    public function testBenchmarkToolApacheBench()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setBenchmarkTool(BenchmarkToolService::APACHE_BENCH);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/benchmarkTool.apacheBench'));
    }

    /**
     * @group BenchmarkToolSiege
     */
    public function testBenchmarkToolSiege()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setBenchmarkTool(BenchmarkToolService::SIEGE);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/benchmarkTool.siege'));
    }

    /**
     * @group PhpVersion56
     */
    public function testPhpVersion56()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_5_6);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/phpVersion.56'));
    }

    /**
     * @group PhpVersion70
     */
    public function testPhpVersion70()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_7_0);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/phpVersion.70'));
    }

    /**
     * @group PhpVersion71
     */
    public function testPhpVersion71()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_7_1);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/phpVersion.71'));
    }

    /**
     * @group PhpVersion72
     */
    public function testPhpVersion72()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_7_2);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/phpVersion.72'));
    }

    public function testResultTypeHelloWorld()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setBenchmark(BenchmarkService::HELLO_WORLD);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/resultType.helloWorld'));
    }

    public function testResultTypeRestApi()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setBenchmark(BenchmarkService::REST_API);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/resultType.restApi'));
    }

    public function testShowScoreTrue()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setShowScore(true);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/showScore.true'));
    }

    public function testShowScoreFalse()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setShowScore(false);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/showScore.false'));
    }

    public function testShowPositionTrue()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setShowPosition(true);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/showPosition.true'));
    }

    public function testShowPositionFalse()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setShowPosition(false);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/showPosition.false'));
    }

    public function testBorderTypeRect()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setBorderType(BorderTypeService::RECT);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/borderType.rect'));
    }

    public function testBorderTypeRounded()
    {
        $tableApi = (new TableApi($this->getToken()))
            ->setBorderType(BorderTypeService::ROUNDED);
        $data = $tableApi->getData();

        static::assertApiErrors($tableApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/TableApiData/borderType.rounded'));
    }
}
