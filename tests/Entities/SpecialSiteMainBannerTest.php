<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\MainBanner;
use Cinemasunshine\ORM\Entities\SpecialSite;
use Cinemasunshine\ORM\Entities\SpecialSiteMainBanner;
use PHPUnit\Framework\TestCase;

/**
 * SpecialSiteMainBanner test
 */
final class SpecialSiteMainBannerTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return SpecialSiteMainBanner&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SpecialSiteMainBanner::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<SpecialSiteMainBanner>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(SpecialSiteMainBanner::class);
    }

    /**
     * test getId
     *
     * @test
     *
     * @return void
     */
    public function testGetId()
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
     * test getMainBanner
     *
     * @test
     *
     * @return void
     */
    public function testGetMainBanner()
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
     * test setMainBanner
     *
     * @test
     *
     * @return void
     */
    public function testSetMainBanner()
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
     * test getSpecialSite
     *
     * @test
     *
     * @return void
     */
    public function testGetSpecialSite()
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
     * test setSpecialSite
     *
     * @test
     *
     * @return void
     */
    public function testSetSpecialSite()
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
     * test getDisplayOrder
     *
     * @test
     *
     * @return void
     */
    public function testGetDisplayOrder()
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
     * test setDisplayOrder
     *
     * @test
     *
     * @return void
     */
    public function testSetDisplayOrder()
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
