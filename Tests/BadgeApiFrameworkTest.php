<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Tests;

use PhpBenchmarksApi\Api\BadgeApi;
use PhpBenchmarksApi\Service\FrameworkService;

final class BadgeApiFrameworkTest extends AbstractApiTestCase
{
    public function testSymfony23()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_2_3);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2171, strlen($data));
    }

    public function testSymfony24()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_2_4);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2029, strlen($data));
    }

    public function testSymfony25()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_2_5);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2033, strlen($data));
    }

    public function testSymfony26()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_2_6);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2055, strlen($data));
    }

    public function testSymfony27()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_2_7);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2067, strlen($data));
    }

    public function testSymfony28()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_2_8);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2074, strlen($data));
    }

    public function testSymfony30()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_3_0);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2074, strlen($data));
    }

    public function testSymfony31()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_3_1);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2146, strlen($data));
    }

    public function testSymfony32()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_3_2);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2093, strlen($data));
    }

    public function testSymfony33()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_3_3);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(1879, strlen($data));
    }

    public function testSymfony34()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::SYMFONY_3_4);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(1933, strlen($data));
    }

    public function testLaravel51()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::LARAVEL_5_1);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(1992, strlen($data));
    }

    public function testLaravel52()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::LARAVEL_5_2);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(1951, strlen($data));
    }

    public function testLaravel53()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::LARAVEL_5_3);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(1925, strlen($data));
    }

    public function testLaravel54()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::LARAVEL_5_4);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(1867, strlen($data));
    }

    public function testLaravel55()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::LARAVEL_5_5);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(1964, strlen($data));
    }

    public function testZendFramework30()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::ZEND_FRAMEWORK_3_0);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(2210, strlen($data));
    }

    public function testCakePHP35()
    {
        $badgeApi = (new BadgeApi())
            ->setComponentVersion(FrameworkService::CAKE_PHP_3_5);
        $data = $badgeApi->getData();

        static::assertApiErrors($badgeApi);
        static::assertEquals(1984, strlen($data));
    }
}
