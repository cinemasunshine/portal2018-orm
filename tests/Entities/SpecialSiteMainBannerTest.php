<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\MainBanner;
use Cinemasunshine\ORM\Entities\SpecialSite;
use Cinemasunshine\ORM\Entities\SpecialSiteMainBanner;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class SpecialSiteMainBannerTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return SpecialSiteMainBanner&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SpecialSiteMainBanner::class, $methods);
    }

    /**
     * @return ReflectionClass<SpecialSiteMainBanner>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(SpecialSiteMainBanner::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 25;

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
    public function testGetSpecialSite(): void
    {
        $specialSite = new SpecialSite(3);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);
        $specialSitePropertyRef->setValue($targetMock, $specialSite);

        $this->assertEquals($specialSite, $targetMock->getSpecialSite());
    }

    /**
     * @test
     */
    public function testSetSpecialSite(): void
    {
        $specialSite = new SpecialSite(3);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSpecialSite($specialSite);

        $targetRef = $this->createTargetReflection();

        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);

        $this->assertEquals($specialSite, $specialSitePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetDisplayOrder(): void
    {
        $displayOrder = 6;

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
        $displayOrder = 6;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
