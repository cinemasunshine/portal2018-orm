<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\TheaterMeta;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

final class TheaterTest extends TestCase
{
    /**
     * @return Theater&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Theater::class);
    }

    /**
     * @param string[] $methods
     * @return Theater&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Theater::class, $methods);
    }

    /**
     * @return ReflectionClass<Theater>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(Theater::class);
    }

    /**
     * @test
     */
    public function testConstruct(): void
    {
        $id = 11;

        $targetMock = $this->createTargetMock();
        $targetRef  = $this->createTargetReflection();

        /** @var ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock, $id);

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $this->assertEquals($id, $idPropertyRef->getValue($targetMock));

        $adminUsersPropertyRef = $targetRef->getProperty('adminUsers');
        $adminUsersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $adminUsersPropertyRef->getValue($targetMock)
        );

        $specialSitesPropertyRef = $targetRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $specialSitesPropertyRef->getValue($targetMock)
        );

        $campaignsPropertyRef = $targetRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $campaignsPropertyRef->getValue($targetMock)
        );

        $mainBannersPropertyRef = $targetRef->getProperty('mainBanners');
        $mainBannersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $mainBannersPropertyRef->getValue($targetMock)
        );

        $newsListPropertyRef = $targetRef->getProperty('newsList');
        $newsListPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $newsListPropertyRef->getValue($targetMock)
        );
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 12;

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
    public function testGetName(): void
    {
        $name = 'theater_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($targetMock, $name);

        $this->assertEquals($name, $targetMock->getName());
    }

    /**
     * @test
     */
    public function testSetName(): void
    {
        $name = 'theater_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setName($name);

        $targetRef = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $this->assertEquals($name, $namePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGatNameJa(): void
    {
        $nameJa = 'theater_name_ja';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $nameJaPropertyRef = $targetRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);
        $nameJaPropertyRef->setValue($targetMock, $nameJa);

        $this->assertEquals($nameJa, $targetMock->getNameJa());
    }

    /**
     * @test
     */
    public function testSetNameJa(): void
    {
        $nameJa = 'theater_name_ja';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setNameJa($nameJa);

        $targetRef = $this->createTargetReflection();

        $nameJaPropertyRef = $targetRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);

        $this->assertEquals($nameJa, $nameJaPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetArea(): void
    {
        $area = 1;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $areaPropertyRef = $targetRef->getProperty('area');
        $areaPropertyRef->setAccessible(true);
        $areaPropertyRef->setValue($targetMock, $area);

        $this->assertEquals($area, $targetMock->getArea());
    }

    /**
     * @test
     */
    public function testSetArea(): void
    {
        $area = 1;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setArea($area);

        $targetRef = $this->createTargetReflection();

        $areaPropertyRef = $targetRef->getProperty('area');
        $areaPropertyRef->setAccessible(true);

        $this->assertEquals($area, $areaPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetMasterVersion(): void
    {
        $masterVersion = 1;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $masterVersionPropertyRef = $targetRef->getProperty('masterVersion');
        $masterVersionPropertyRef->setAccessible(true);
        $masterVersionPropertyRef->setValue($targetMock, $masterVersion);

        $this->assertEquals($masterVersion, $targetMock->getMasterVersion());
    }

    /**
     * @test
     */
    public function testSetMasterVersion(): void
    {
        $masterVersion = 1;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setMasterVersion($masterVersion);

        $targetRef = $this->createTargetReflection();

        $masterVersionPropertyRef = $targetRef->getProperty('masterVersion');
        $masterVersionPropertyRef->setAccessible(true);

        $this->assertEquals($masterVersion, $masterVersionPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetMasterCode(): void
    {
        $masterCode = '111';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $masterCodePropertyRef = $targetRef->getProperty('masterCode');
        $masterCodePropertyRef->setAccessible(true);
        $masterCodePropertyRef->setValue($targetMock, $masterCode);

        $this->assertEquals($masterCode, $targetMock->getMasterCode());
    }

    /**
     * @test
     */
    public function testSetMasterCode(): void
    {
        $masterCode = '111';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setMasterCode($masterCode);

        $targetRef = $this->createTargetReflection();

        $masterCodePropertyRef = $targetRef->getProperty('masterCode');
        $masterCodePropertyRef->setAccessible(true);

        $this->assertEquals($masterCode, $masterCodePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetDisplayOrder(): void
    {
        $displayOrder = 3;

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
        $displayOrder = 3;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetStatus(): void
    {
        $status = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $statusPropertyRef = $targetRef->getProperty('status');
        $statusPropertyRef->setAccessible(true);
        $statusPropertyRef->setValue($targetMock, $status);

        $this->assertEquals($status, $targetMock->getStatus());
    }

    /**
     * @test
     */
    public function testSetStatus(): void
    {
        $status = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setStatus($status);

        $targetRef = $this->createTargetReflection();

        $statusPropertyRef = $targetRef->getProperty('status');
        $statusPropertyRef->setAccessible(true);

        $this->assertEquals($status, $statusPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetMeta(): void
    {
        $meta = new TheaterMeta();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $metaPropertyRef = $targetRef->getProperty('meta');
        $metaPropertyRef->setAccessible(true);
        $metaPropertyRef->setValue($targetMock, $meta);

        $this->assertEquals($meta, $targetMock->getMeta());
    }

    /**
     * @test
     */
    public function testGetAdminUsers(): void
    {
        $adminUsers = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $adminUsersPropertyRef = $targetRef->getProperty('adminUsers');
        $adminUsersPropertyRef->setAccessible(true);
        $adminUsersPropertyRef->setValue($targetMock, $adminUsers);

        $this->assertEquals($adminUsers, $targetMock->getAdminUsers());
    }

    /**
     * @test
     */
    public function testGetSpecialSites(): void
    {
        $specialSites = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialSitesPropertyRef = $targetRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $specialSitesPropertyRef->setValue($targetMock, $specialSites);

        $this->assertEquals($specialSites, $targetMock->getSpecialSites());
    }

    /**
     * @test
     */
    public function testGetCampaigns(): void
    {
        $campaigns = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $campaignsPropertyRef = $targetRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $campaignsPropertyRef->setValue($targetMock, $campaigns);

        $this->assertEquals($campaigns, $targetMock->getCampaigns());
    }

    /**
     * @test
     */
    public function testGetMainBanners(): void
    {
        $mainBanners = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $mainBannersPropertyRef = $targetRef->getProperty('mainBanners');
        $mainBannersPropertyRef->setAccessible(true);
        $mainBannersPropertyRef->setValue($targetMock, $mainBanners);

        $this->assertEquals($mainBanners, $targetMock->getMainBanners());
    }

    /**
     * @test
     */
    public function testGetNewsList(): void
    {
        $newsList = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $newsListPropertyRef = $targetRef->getProperty('newsList');
        $newsListPropertyRef->setAccessible(true);
        $newsListPropertyRef->setValue($targetMock, $newsList);

        $this->assertEquals($newsList, $targetMock->getNewsList());
    }
}
