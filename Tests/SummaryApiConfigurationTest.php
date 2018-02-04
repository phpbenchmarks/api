<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Tests;

use PhpBenchmarksApi\Api\SummaryApi;
use PhpBenchmarksApi\Service\BenchmarkService;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\BorderTypeService;
use PhpBenchmarksApi\Service\PhpVersionService;

/**
 * @group SummaryApi
 * @group SummaryApiConfiguration
 */
final class SummaryApiConfigurationTest extends AbstractApiTestCase
{
    public function testDefault()
    {
        $summaryApi = new SummaryApi($this->getToken());
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/default'));
    }

    public function testConfiguration()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setBackgroundColor('aabbff')
            ->setFontColor('ffaabb')
            ->setScoreBackgroundColor('aabbff')
            ->setScoreFontColor('ffaabb')
            ->setPositionBackgroundColor('aabbff')
            ->setPositionFontColor('ffaabb');
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/configuration'));
    }

    /**
     * @group BenchmarkToolApacheBench
     */
    public function testBenchmarkToolApacheBench()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setBenchmarkTool(BenchmarkToolService::APACHE_BENCH);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/benchmarkTool.apacheBench'));
    }

    /**
     * @group BenchmarkToolSiege
     */
    public function testBenchmarkToolSiege()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setBenchmarkTool(BenchmarkToolService::SIEGE);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/benchmarkTool.siege'));
    }

    /**
     * @group PhpVersion56
     */
    public function testPhpVersion56()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_5_6);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/phpVersion.56'));
    }

    /**
     * @group PhpVersion70
     */
    public function testPhpVersion70()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_7_0);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/phpVersion.70'));
    }

    /**
     * @group PhpVersion71
     */
    public function testPhpVersion71()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_7_1);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/phpVersion.71'));
    }

    /**
     * @group PhpVersion72
     */
    public function testPhpVersion72()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_7_2);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/phpVersion.72'));
    }

    public function testResultTypeHelloWorld()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setBenchmark(BenchmarkService::HELLO_WORLD);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/resultType.helloWorld'));
    }

    public function testResultTypeRestApi()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setBenchmark(BenchmarkService::REST_API);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/resultType.restApi'));
    }

    public function testShowScoreTrue()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setShowScore(true);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/showScore.true'));
    }

    public function testShowScoreFalse()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setShowScore(false);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/showScore.false'));
    }

    public function testShowPositionTrue()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setShowPosition(true);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/showPosition.true'));
    }

    public function testShowPositionFalse()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setShowPosition(false);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/showPosition.false'));
    }

    public function testBorderTypeRect()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setBorderType(BorderTypeService::RECT);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/borderType.rect'));
    }

    public function testBorderTypeRounded()
    {
        $summaryApi = (new SummaryApi($this->getToken()))
            ->setBorderType(BorderTypeService::ROUNDED);
        $data = $summaryApi->getData();

        static::assertApiErrors($summaryApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/SummaryApiData/borderType.rounded'));
    }
}
