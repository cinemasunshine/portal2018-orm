<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\Theater;
use Cinemasunshine\ORM\Entity\TheaterMeta;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Theater test
 */
final class TheaterTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return Theater&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Theater::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return Theater&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Theater::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<Theater>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(Theater::class);
    }

    /**
     * test construct
     *
     * @test
     * @return void
     */
    public function testConstruct()
    {
        $id = 11;
        $targetMock = $this->createTargetMock();
        $targetRef = $this->createTargetReflection();

        /** @var \ReflectionMethod $constructorRef */
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
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 12;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getName
     *
     * @test
     * @return void
     */
    public function testGetName()
    {
        $name = 'theater_name';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($targetMock, $name);

        $this->assertEquals($name, $targetMock->getName());
    }

    /**
     * test setName
     *
     * @test
     * @return void
     */
    public function testSetName()
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
     * test getNameJa
     *
     * @test
     * @return void
     */
    public function testGatNameJa()
    {
        $nameJa = 'theater_name_ja';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $nameJaPropertyRef = $targetRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);
        $nameJaPropertyRef->setValue($targetMock, $nameJa);

        $this->assertEquals($nameJa, $targetMock->getNameJa());
    }

    /**
     * test setNameJa
     *
     * @test
     * @return void
     */
    public function testSetNameJa()
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
     * test getArea
     *
     * @test
     * @return void
     */
    public function testGetArea()
    {
        $area = 1;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $areaPropertyRef = $targetRef->getProperty('area');
        $areaPropertyRef->setAccessible(true);
        $areaPropertyRef->setValue($targetMock, $area);

        $this->assertEquals($area, $targetMock->getArea());
    }

    /**
     * test setArea
     *
     * @return void
     */
    public function testSetArea()
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
     * test getMasterVersion
     *
     * @test
     * @return void
     */
    public function testGetMasterVersion()
    {
        $masterVersion = 1;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $masterVersionPropertyRef = $targetRef->getProperty('masterVersion');
        $masterVersionPropertyRef->setAccessible(true);
        $masterVersionPropertyRef->setValue($targetMock, $masterVersion);

        $this->assertEquals($masterVersion, $targetMock->getMasterVersion());
    }

    /**
     * test setMasterVersion
     *
     * @test
     * @return void
     */
    public function testSetMasterVersion()
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
     * test getMasterCode
     *
     * @test
     * @return void
     */
    public function testGetMasterCode()
    {
        $masterCode = '111';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $masterCodePropertyRef = $targetRef->getProperty('masterCode');
        $masterCodePropertyRef->setAccessible(true);
        $masterCodePropertyRef->setValue($targetMock, $masterCode);

        $this->assertEquals($masterCode, $targetMock->getMasterCode());
    }

    /**
     * test setMasterCode
     *
     * @test
     * @return void
     */
    public function testSetMasterCode()
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
     * test getDisplayOrder
     *
     * @test
     * @return void
     */
    public function testGetDisplayOrder()
    {
        $displayOrder = 3;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);
        $displayOrderPropertyRef->setValue($targetMock, $displayOrder);

        $this->assertEquals($displayOrder, $targetMock->getDisplayOrder());
    }

    /**
     * test setDisplayOrder
     *
     * @test
     * @return void
     */
    public function testSetDisplayOrder()
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
     * test getStatus
     *
     * @test
     * @return void
     */
    public function testGetStatus()
    {
        $status = 2;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $statusPropertyRef = $targetRef->getProperty('status');
        $statusPropertyRef->setAccessible(true);
        $statusPropertyRef->setValue($targetMock, $status);

        $this->assertEquals($status, $targetMock->getStatus());
    }

    /**
     * test setStatus
     *
     * @test
     * @return void
     */
    public function testSetStatus()
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
     * test getMeta
     *
     * @test
     * @return void
     */
    public function testGetMeta()
    {
        $meta = new TheaterMeta();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $metaPropertyRef = $targetRef->getProperty('meta');
        $metaPropertyRef->setAccessible(true);
        $metaPropertyRef->setValue($targetMock, $meta);

        $this->assertEquals($meta, $targetMock->getMeta());
    }

    /**
     * test getAdminUsers
     *
     * @test
     * @return void
     */
    public function testGetAdminUsers()
    {
        $adminUsers = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $adminUsersPropertyRef = $targetRef->getProperty('adminUsers');
        $adminUsersPropertyRef->setAccessible(true);
        $adminUsersPropertyRef->setValue($targetMock, $adminUsers);

        $this->assertEquals($adminUsers, $targetMock->getAdminUsers());
    }

    /**
     * test getSpecialSites
     *
     * @test
     * @return void
     */
    public function testGetSpecialSites()
    {
        $specialSites = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $specialSitesPropertyRef = $targetRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $specialSitesPropertyRef->setValue($targetMock, $specialSites);

        $this->assertEquals($specialSites, $targetMock->getSpecialSites());
    }

    /**
     * test getCampaigns
     *
     * @test
     * @return void
     */
    public function testGetCampaigns()
    {
        $campaigns = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $campaignsPropertyRef = $targetRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $campaignsPropertyRef->setValue($targetMock, $campaigns);

        $this->assertEquals($campaigns, $targetMock->getCampaigns());
    }

    /**
     * test getMainBanners
     *
     * @test
     * @return void
     */
    public function testGetMainBanners()
    {
        $mainBanners = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $mainBannersPropertyRef = $targetRef->getProperty('mainBanners');
        $mainBannersPropertyRef->setAccessible(true);
        $mainBannersPropertyRef->setValue($targetMock, $mainBanners);

        $this->assertEquals($mainBanners, $targetMock->getMainBanners());
    }

    /**
     * test getNewsList
     *
     * @test
     * @return void
     */
    public function testGetNewsList()
    {
        $newsList = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $newsListPropertyRef = $targetRef->getProperty('newsList');
        $newsListPropertyRef->setAccessible(true);
        $newsListPropertyRef->setValue($targetMock, $newsList);

        $this->assertEquals($newsList, $targetMock->getNewsList());
    }
}
