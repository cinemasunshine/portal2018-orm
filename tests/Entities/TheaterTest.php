<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\TheaterMeta;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class TheaterTest extends TestCase
{
    /** @var Theater */
    protected $theater;

    /**
     * @return ReflectionClass<Theater>
     */
    public function createTheaterReflection(): ReflectionClass
    {
        return new ReflectionClass(Theater::class);
    }

    /**
     * @before
     */
    public function setUp(): void
    {
        $this->theater = new Theater(11);
    }

    /**
     * @covers ::__construct
     * @test
     * @testdox __constructはプロパティ$adminUsers、$specialSites、$campaigns、$mainBanners、$newsListをArrayCollectionで初期化する
     */
    public function testConstruct(): void
    {
        $id = 11;

        $theaterRef = $this->createTheaterReflection();

        $idPropertyRef = $theaterRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $this->assertEquals($id, $idPropertyRef->getValue($this->theater));

        $adminUsersPropertyRef = $theaterRef->getProperty('adminUsers');
        $adminUsersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $adminUsersPropertyRef->getValue($this->theater)
        );

        $specialSitesPropertyRef = $theaterRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $specialSitesPropertyRef->getValue($this->theater)
        );

        $campaignsPropertyRef = $theaterRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $campaignsPropertyRef->getValue($this->theater)
        );

        $mainBannersPropertyRef = $theaterRef->getProperty('mainBanners');
        $mainBannersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $mainBannersPropertyRef->getValue($this->theater)
        );

        $newsListPropertyRef = $theaterRef->getProperty('newsList');
        $newsListPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $newsListPropertyRef->getValue($this->theater)
        );
    }

    /**
     * @covers ::getId
     * @test
     * @testdox getIdはプロパティ$idの値を返す
     */
    public function testGetId(): void
    {
        $id = 12;

        $theaterRef = $this->createTheaterReflection();

        $idPropertyRef = $theaterRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($this->theater, $id);

        $this->assertEquals($id, $this->theater->getId());
    }

    /**
     * @covers ::getName
     * @test
     * @testdox getNameはプロパティ$nameの値を返す
     */
    public function testGetName(): void
    {
        $name = 'theater_name';

        $theaterRef = $this->createTheaterReflection();

        $namePropertyRef = $theaterRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($this->theater, $name);

        $this->assertEquals($name, $this->theater->getName());
    }

    /**
     * @covers ::setName
     * @test
     * @testdox setNameはプロパティ$nameに引数の値をセットする
     */
    public function testSetName(): void
    {
        $theaterRef = $this->createTheaterReflection();

        $namePropertyRef = $theaterRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $name = 'theater_name';
        $this->theater->setName($name);
        $this->assertEquals($name, $namePropertyRef->getValue($this->theater));
    }

    /**
     * @covers ::getNameJa
     * @test
     * @testdox getNameJaはプロパティ$nameの値を返す
     */
    public function testGatNameJa(): void
    {
        $nameJa = 'theater_name_ja';

        $theaterRef = $this->createTheaterReflection();

        $nameJaPropertyRef = $theaterRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);
        $nameJaPropertyRef->setValue($this->theater, $nameJa);

        $this->assertEquals($nameJa, $this->theater->getNameJa());
    }

    /**
     * @covers ::setNameJa
     * @test
     * @testdox setNameJaはプロパティ$nameJaに引数の値をセットする
     */
    public function testSetNameJa(): void
    {
        $theaterRef = $this->createTheaterReflection();

        $nameJaPropertyRef = $theaterRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);

        $nameJa = 'theater_name_ja';
        $this->theater->setNameJa($nameJa);
        $this->assertEquals($nameJa, $nameJaPropertyRef->getValue($this->theater));
    }

    /**
     * @covers ::getArea
     * @test
     * @testdox getAreaはプロパティ$areaの値を返す
     */
    public function testGetArea(): void
    {
        $area = 1;

        $theaterRef = $this->createTheaterReflection();

        $areaPropertyRef = $theaterRef->getProperty('area');
        $areaPropertyRef->setAccessible(true);
        $areaPropertyRef->setValue($this->theater, $area);

        $this->assertEquals($area, $this->theater->getArea());
    }

    /**
     * @covers ::setArea
     * @test
     * @testdox setAreaはプロパティ$areaに引数の値をセットする
     */
    public function testSetArea(): void
    {
        $theaterRef = $this->createTheaterReflection();

        $areaPropertyRef = $theaterRef->getProperty('area');
        $areaPropertyRef->setAccessible(true);

        $area = 1;
        $this->theater->setArea($area);
        $this->assertEquals($area, $areaPropertyRef->getValue($this->theater));
    }

    /**
     * @covers ::getMasterVersion
     * @test
     * @testdox getMasterVersionはプロパティ$masterVersionの値を返す
     */
    public function testGetMasterVersion(): void
    {
        $masterVersion = 1;

        $theaterRef = $this->createTheaterReflection();

        $masterVersionPropertyRef = $theaterRef->getProperty('masterVersion');
        $masterVersionPropertyRef->setAccessible(true);
        $masterVersionPropertyRef->setValue($this->theater, $masterVersion);

        $this->assertEquals($masterVersion, $this->theater->getMasterVersion());
    }

    /**
     * @covers ::setMasterVersion
     * @test
     * @testdox setMasterVersionはプロパティ$masterVersionに引数の値をセットする
     */
    public function testSetMasterVersion(): void
    {
        $theaterRef = $this->createTheaterReflection();

        $masterVersionPropertyRef = $theaterRef->getProperty('masterVersion');
        $masterVersionPropertyRef->setAccessible(true);

        $masterVersion = 1;
        $this->theater->setMasterVersion($masterVersion);
        $this->assertEquals($masterVersion, $masterVersionPropertyRef->getValue($this->theater));
    }

    /**
     * @covers ::getMasterCode
     * @test
     * @testdox getMasterCodeはプロパティ$masterCodeの値を返す
     */
    public function testGetMasterCode(): void
    {
        $masterCode = '111';

        $theaterRef = $this->createTheaterReflection();

        $masterCodePropertyRef = $theaterRef->getProperty('masterCode');
        $masterCodePropertyRef->setAccessible(true);
        $masterCodePropertyRef->setValue($this->theater, $masterCode);

        $this->assertEquals($masterCode, $this->theater->getMasterCode());
    }

    /**
     * @covers ::setMasterCode
     * @test
     * @testdox setMasterCodeはプロパティ$masterCodeに引数の値をセットする
     */
    public function testSetMasterCode(): void
    {
        $theaterRef = $this->createTheaterReflection();

        $masterCodePropertyRef = $theaterRef->getProperty('masterCode');
        $masterCodePropertyRef->setAccessible(true);

        $masterCode = '111';
        $this->theater->setMasterCode($masterCode);
        $this->assertEquals($masterCode, $masterCodePropertyRef->getValue($this->theater));
    }

    /**
     * @covers ::getDisplayOrder
     * @test
     * @testdox getDisplayOrderはプロパティ$displayOrderの値を返す
     */
    public function testGetDisplayOrder(): void
    {
        $displayOrder = 3;

        $theaterRef = $this->createTheaterReflection();

        $displayOrderPropertyRef = $theaterRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);
        $displayOrderPropertyRef->setValue($this->theater, $displayOrder);

        $this->assertEquals($displayOrder, $this->theater->getDisplayOrder());
    }

    /**
     * @covers ::setDisplayOrder
     * @test
     * @testdox setDisplayOrderはプロパティ$displayOrderに引数の値をセットする
     */
    public function testSetDisplayOrder(): void
    {
        $theaterRef = $this->createTheaterReflection();

        $displayOrderPropertyRef = $theaterRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $displayOrder = 3;
        $this->theater->setDisplayOrder($displayOrder);
        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($this->theater));
    }

    /**
     * @covers ::getStatus
     * @test
     * @testdox getStatusはプロパティ$statusの値を返す
     */
    public function testGetStatus(): void
    {
        $status = 2;

        $theaterRef = $this->createTheaterReflection();

        $statusPropertyRef = $theaterRef->getProperty('status');
        $statusPropertyRef->setAccessible(true);
        $statusPropertyRef->setValue($this->theater, $status);

        $this->assertEquals($status, $this->theater->getStatus());
    }

    /**
     * @covers ::setDisplayOrder
     * @test
     * @testdox setDisplayOrderはプロパティ$displayOrderに引数の値をセットする
     */
    public function testSetStatus(): void
    {
        $theaterRef = $this->createTheaterReflection();

        $statusPropertyRef = $theaterRef->getProperty('status');
        $statusPropertyRef->setAccessible(true);

        $status = 2;
        $this->theater->setStatus($status);
        $this->assertEquals($status, $statusPropertyRef->getValue($this->theater));
    }

    /**
     * @covers ::getStatus
     * @test
     * @testdox getStatusはプロパティ$statusの値を返す
     */
    public function testGetMeta(): void
    {
        $meta = new TheaterMeta();

        $theaterRef = $this->createTheaterReflection();

        $metaPropertyRef = $theaterRef->getProperty('meta');
        $metaPropertyRef->setAccessible(true);
        $metaPropertyRef->setValue($this->theater, $meta);

        $this->assertEquals($meta, $this->theater->getMeta());
    }

    /**
     * @covers ::getAdminUsers
     * @test
     * @testdox getAdminUsersはプロパティ$adminUsersの値を返す
     */
    public function testGetAdminUsers(): void
    {
        $adminUsers = new ArrayCollection();

        $theaterRef = $this->createTheaterReflection();

        $adminUsersPropertyRef = $theaterRef->getProperty('adminUsers');
        $adminUsersPropertyRef->setAccessible(true);
        $adminUsersPropertyRef->setValue($this->theater, $adminUsers);

        $this->assertEquals($adminUsers, $this->theater->getAdminUsers());
    }

    /**
     * @covers ::getSpecialSites
     * @test
     * @testdox getSpecialSitesはプロパティ$specialSitesの値を返す
     */
    public function testGetSpecialSites(): void
    {
        $specialSites = new ArrayCollection();

        $theaterRef = $this->createTheaterReflection();

        $specialSitesPropertyRef = $theaterRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $specialSitesPropertyRef->setValue($this->theater, $specialSites);

        $this->assertEquals($specialSites, $this->theater->getSpecialSites());
    }

    /**
     * @covers ::getSpecialSites
     * @test
     * @testdox getSpecialSitesはプロパティ$specialSitesの値を返す
     */
    public function testGetCampaigns(): void
    {
        $campaigns = new ArrayCollection();

        $theaterRef = $this->createTheaterReflection();

        $campaignsPropertyRef = $theaterRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $campaignsPropertyRef->setValue($this->theater, $campaigns);

        $this->assertEquals($campaigns, $this->theater->getCampaigns());
    }

    /**
     * @covers ::getSpecialSites
     * @test
     * @testdox getSpecialSitesはプロパティ$specialSitesの値を返す
     */
    public function testGetMainBanners(): void
    {
        $mainBanners = new ArrayCollection();

        $theaterRef = $this->createTheaterReflection();

        $mainBannersPropertyRef = $theaterRef->getProperty('mainBanners');
        $mainBannersPropertyRef->setAccessible(true);
        $mainBannersPropertyRef->setValue($this->theater, $mainBanners);

        $this->assertEquals($mainBanners, $this->theater->getMainBanners());
    }

    /**
     * @covers ::getSpecialSites
     * @test
     * @testdox getSpecialSitesはプロパティ$specialSitesの値を返す
     */
    public function testGetNewsList(): void
    {
        $newsList = new ArrayCollection();

        $theaterRef = $this->createTheaterReflection();

        $newsListPropertyRef = $theaterRef->getProperty('newsList');
        $newsListPropertyRef->setAccessible(true);
        $newsListPropertyRef->setValue($this->theater, $newsList);

        $this->assertEquals($newsList, $this->theater->getNewsList());
    }
}
