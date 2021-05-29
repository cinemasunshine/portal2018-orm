<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\SpecialSite;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class SpecialSiteTest extends TestCase
{
    /** @var SpecialSite */
    protected $specialSite;

    /**
     * @return ReflectionClass<SpecialSite>
     */
    public function createSpecialSiteReflection(): ReflectionClass
    {
        return new ReflectionClass(SpecialSite::class);
    }

    /**
     * @before
     */
    public function setUp(): void
    {
        $this->specialSite = new SpecialSite(11);
    }

    /**
     * @covers ::__construct
     * @test
     * @testdox __constructはプロパティ$theaters、$campaigns、$mainBanners、$newsListをArrayCollectionで初期化する
     */
    public function testConstruct(): void
    {
        $id = 11;

        $specialSiteRef = $this->createSpecialSiteReflection();

        $idPropertyRef = $specialSiteRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $this->assertEquals($id, $idPropertyRef->getValue($this->specialSite));

        $theatersPropertyRef = $specialSiteRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $theatersPropertyRef->getValue($this->specialSite)
        );

        $campaignsPropertyRef = $specialSiteRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $campaignsPropertyRef->getValue($this->specialSite)
        );

        $mainBannersPropertyRef = $specialSiteRef->getProperty('mainBanners');
        $mainBannersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $mainBannersPropertyRef->getValue($this->specialSite)
        );

        $newsListPropertyRef = $specialSiteRef->getProperty('newsList');
        $newsListPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $newsListPropertyRef->getValue($this->specialSite)
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

        $specialSiteRef = $this->createSpecialSiteReflection();

        $idPropertyRef = $specialSiteRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($this->specialSite, $id);

        $this->assertEquals($id, $this->specialSite->getId());
    }

    /**
     * @covers ::getName
     * @test
     * @testdox getNameはプロパティ$nameの値を返す
     */
    public function testGetName(): void
    {
        $name = 'special_site_name';

        $specialSiteRef = $this->createSpecialSiteReflection();

        $namePropertyRef = $specialSiteRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($this->specialSite, $name);

        $this->assertEquals($name, $this->specialSite->getName());
    }

    /**
     * @covers ::setName
     * @test
     * @testdox setNameはプロパティ$nameに引数の値をセットする
     */
    public function testSetName(): void
    {
        $specialSiteRef = $this->createSpecialSiteReflection();

        $namePropertyRef = $specialSiteRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $name = 'special_site_name';
        $this->specialSite->setName($name);
        $this->assertEquals($name, $namePropertyRef->getValue($this->specialSite));
    }

    /**
     * @covers ::getNameJa
     * @test
     * @testdox getNameJaはプロパティ$nameの値を返す
     */
    public function testGatNameJa(): void
    {
        $nameJa = 'special_site_name_ja';

        $specialSiteRef = $this->createSpecialSiteReflection();

        $nameJaPropertyRef = $specialSiteRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);
        $nameJaPropertyRef->setValue($this->specialSite, $nameJa);

        $this->assertEquals($nameJa, $this->specialSite->getNameJa());
    }

    /**
     * @covers ::setNameJa
     * @test
     * @testdox setNameJaはプロパティ$nameJaに引数の値をセットする
     */
    public function testSetNameJa(): void
    {
        $specialSiteRef = $this->createSpecialSiteReflection();

        $nameJaPropertyRef = $specialSiteRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);

        $nameJa = 'special_site_name_ja';
        $this->specialSite->setNameJa($nameJa);
        $this->assertEquals($nameJa, $nameJaPropertyRef->getValue($this->specialSite));
    }

    /**
     * @covers ::getTheaters
     * @test
     * @testdox getTheatersはプロパティ$theatersの値を返す
     */
    public function testGetTheaters(): void
    {
        $theaters = new ArrayCollection();

        $specialSiteRef = $this->createSpecialSiteReflection();

        $theatersPropertyRef = $specialSiteRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $theatersPropertyRef->setValue($this->specialSite, $theaters);

        $this->assertEquals($theaters, $this->specialSite->getTheaters());
    }

    /**
     * @covers ::getTheaters
     * @test
     * @testdox getTheatersはプロパティ$campaignsの値を返す
     */
    public function testGetCampaigns(): void
    {
        $campaigns = new ArrayCollection();

        $specialSiteRef = $this->createSpecialSiteReflection();

        $campaignsPropertyRef = $specialSiteRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $campaignsPropertyRef->setValue($this->specialSite, $campaigns);

        $this->assertEquals($campaigns, $this->specialSite->getCampaigns());
    }

    /**
     * @covers ::getMainBanners
     * @test
     * @testdox getMainBannersはプロパティ$mainBannersの値を返す
     */
    public function testGetMainBanners(): void
    {
        $mainBanners = new ArrayCollection();

        $specialSiteRef = $this->createSpecialSiteReflection();

        $mainBannersPropertyRef = $specialSiteRef->getProperty('mainBanners');
        $mainBannersPropertyRef->setAccessible(true);
        $mainBannersPropertyRef->setValue($this->specialSite, $mainBanners);

        $this->assertEquals($mainBanners, $this->specialSite->getMainBanners());
    }

    /**
     * @covers ::getNewsList
     * @test
     * @testdox getNewsListはプロパティ$newsListの値を返す
     */
    public function testGetNewsList(): void
    {
        $newsList = new ArrayCollection();

        $specialSiteRef = $this->createSpecialSiteReflection();

        $newsListPropertyRef = $specialSiteRef->getProperty('newsList');
        $newsListPropertyRef->setAccessible(true);
        $newsListPropertyRef->setValue($this->specialSite, $newsList);

        $this->assertEquals($newsList, $this->specialSite->getNewsList());
    }
}
