<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Tests;

use PhpBenchmarksApi\Api\BadgeApi;
use PhpBenchmarksApi\Service\BenchmarkService;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\BorderTypeService;
use PhpBenchmarksApi\Service\PhpVersionService;

/**
 * @group BadgeApi
 * @group BadgeApiConfiguration
 */
final class BadgeApiConfigurationTest extends AbstractApiTestCase
{
    public function testDefault()
    {
        $badgeApi = new BadgeApi($this->getToken());
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/default'));
    }

    public function testConfiguration()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setScoreBackgroundColor('aabbff')
            ->setScoreFontColor('ffaabb')
            ->setPositionBackgroundColor('aabbff')
            ->setPositionFontColor('ffaabb');
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/configuration'));
    }

    /**
     * @group BenchmarkToolApacheBench
     */
    public function testBenchmarkToolApacheBench()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setBenchmarkTool(BenchmarkToolService::APACHE_BENCH);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/benchmarkTool.apacheBench'));
    }

    /**
     * @group BenchmarkToolSiege
     */
    public function testBenchmarkToolSiege()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setBenchmarkTool(BenchmarkToolService::SIEGE);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/benchmarkTool.siege'));
    }

    /**
     * @group PhpVersion56
     */
    public function testPhpVersion56()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_5_6);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/phpVersion.56'));
    }

    /**
     * @group PhpVersion70
     */
    public function testPhpVersion70()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_7_0);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/phpVersion.70'));
    }

    /**
     * @group PhpVersion71
     */
    public function testPhpVersion71()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_7_1);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/phpVersion.71'));
    }

    /**
     * @group PhpVersion72
     */
    public function testPhpVersion72()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setPhpVersion(PhpVersionService::VERSION_7_2);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/phpVersion.72'));
    }

    public function testResultTypeHelloWorld()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setBenchmark(BenchmarkService::HELLO_WORLD);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/resultType.helloWorld'));
    }

    public function testResultTypeRestApi()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setBenchmark(BenchmarkService::REST_API);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/resultType.restApi'));
    }

    public function testShowScoreTrue()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setShowScore(true);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/showScore.true'));
    }

    public function testShowScoreFalse()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setShowScore(false);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/showScore.false'));
    }

    public function testShowPositionTrue()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setShowPosition(true);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/showPosition.true'));
    }

    public function testShowPositionFalse()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setShowPosition(false);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/showPosition.false'));
    }

    public function testBorderTypeRect()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setBorderType(BorderTypeService::RECT);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/borderType.rect'));
    }

    public function testBorderTypeRounded()
    {
        $badgeApi = (new BadgeApi($this->getToken()))
            ->setBorderType(BorderTypeService::ROUNDED);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/borderType.rounded'));
    }
}
