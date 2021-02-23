<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\MainBanner;
use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\TheaterMainBanner;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class TheaterMainBannerTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return TheaterMainBanner&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterMainBanner::class, $methods);
    }

    /**
     * @return ReflectionClass<TheaterMainBanner>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(TheaterMainBanner::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 26;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * @test
     */
    public function testGetMainBanner(): void
    {
        $mainBanner = new MainBanner();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $mainBannerPropertyRef = $targetRef->getProperty('mainBanner');
        $mainBannerPropertyRef->setAccessible(true);
        $mainBannerPropertyRef->setValue($targetMock, $mainBanner);

        $this->assertEquals($mainBanner, $targetMock->getMainBanner());
    }

    /**
     * @test
     */
    public function testSetMainBanner(): void
    {
        $mainBanner = new MainBanner();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setMainBanner($mainBanner);

        $targetRef = $this->createTargetReflection();

        $mainBannerPropertyRef = $targetRef->getProperty('mainBanner');
        $mainBannerPropertyRef->setAccessible(true);

        $this->assertEquals($mainBanner, $mainBannerPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetTheater(): void
    {
        $theater = new Theater(9);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);
        $theaterPropertyRef->setValue($targetMock, $theater);

        $this->assertEquals($theater, $targetMock->getTheater());
    }

    /**
     * @test
     */
    public function testSetTheater(): void
    {
        $theater = new Theater(9);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheater($theater);

        $targetRef = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);

        $this->assertEquals($theater, $theaterPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetDisplayOrder(): void
    {
        $displayOrder = 8;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);
        $displayOrderPropertyRef->setValue($targetMock, $displayOrder);

        $this->assertEquals($displayOrder, $targetMock->getDisplayOrder());
    }

    /**
     * @test
     */
    public function testSetDisplayOrder(): void
    {
        $displayOrder = 8;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
