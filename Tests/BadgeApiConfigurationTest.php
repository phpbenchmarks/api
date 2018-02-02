<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Tests;

use PhpBenchmarksApi\Api\BadgeApi;
use PhpBenchmarksApi\Service\BenchmarkService;

final class BadgeApiTest extends AbstractApiTestCase
{
    public function testDefault()
    {
        $badgeApi = new BadgeApi();
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/default'));
    }

    public function testConfiguration()
    {
        $badgeApi = (new BadgeApi())
            ->setScoreBackgroundColor('aabbff')
            ->setScoreFontColor('ffaabb')
            ->setPositionBackgroundColor('aabbff')
            ->setPositionFontColor('ffaabb');
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/configuration'));
    }

    public function testBenchmarkToolApacheBench()
    {
        $badgeApi = new BadgeApi();
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/default'));
    }
//
//    public function testBenchmarkToolSiege()
//    {
//
//    }
//
//    public function testPhpVersion56()
//    {
//
//    }
//
//    public function testPhpVersion70()
//    {
//
//    }
//
//    public function testPhpVersion71()
//    {
//
//    }
//
//    public function testPhpVersion72()
//    {
//
//    }

    public function testResultTypeHelloWorld()
    {
        $badgeApi = (new BadgeApi())
            ->setBenchmark(BenchmarkService::HELLO_WORLD);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/resultType.helloWorld'));
    }

    public function testResultTypeRestApi()
    {
        $badgeApi = (new BadgeApi())
            ->setBenchmark(BenchmarkService::REST_API);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals($data, file_get_contents(__DIR__ . '/BadgeApiData/resultType.restApi'));
    }

//    public function testShowScoreTrue()
//    {
//
//    }
//
//    public function testShowScoreFalse()
//    {
//
//    }
//
//    public function testShowPositionTrue()
//    {
//
//    }
//
//    public function testShowPositionFalse()
//    {
//
//    }
//
//    public function testBorderTypeRect()
//    {
//
//    }
//
//    public function testBorderTypeRounded()
//    {
//
//    }
}
