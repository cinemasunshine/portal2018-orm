<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Page;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @coversDefaultClass \Cinemasunshine\ORM\Entities\Page
 */
final class PageTest extends TestCase
{
    /** @var Page */
    protected $page;

    /**
     * @return ReflectionClass<Page>
     */
    public function createPageReflection(): ReflectionClass
    {
        return new ReflectionClass(Page::class);
    }

    /**
     * @before
     */
    public function setUp(): void
    {
        $this->page = new Page(11);
    }

    /**
     * @covers ::__construct
     * @test
     * @testdox __constructはプロパティ$campaigns、$mainBanners、$newsList、$trailersをArrayCollectionで初期化する
     */
    public function testConstruct(): void
    {
        $pageRef = $this->createPageReflection();

        $idPropertyRef = $pageRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $this->assertEquals(11, $idPropertyRef->getValue($this->page));

        $campaignsPropertyRef = $pageRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $campaignsPropertyRef->getValue($this->page)
        );

        $mainBannersPropertyRef = $pageRef->getProperty('mainBanners');
        $mainBannersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $mainBannersPropertyRef->getValue($this->page)
        );

        $newsListPropertyRef = $pageRef->getProperty('newsList');
        $newsListPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $newsListPropertyRef->getValue($this->page)
        );

        $trailersPropertyRef = $pageRef->getProperty('trailers');
        $trailersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $trailersPropertyRef->getValue($this->page)
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

        $pageRef = $this->createPageReflection();

        $idPropertyRef = $pageRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($this->page, $id);

        $this->assertEquals($id, $this->page->getId());
    }

    /**
     * @covers ::getName
     * @test
     * @testdox getNameはプロパティ$nameの値を返す
     */
    public function testGetName(): void
    {
        $name = 'page_name';

        $pageRef = $this->createPageReflection();

        $namePropertyRef = $pageRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($this->page, $name);

        $this->assertEquals($name, $this->page->getName());
    }

    /**
     * @covers ::setName
     * @test
     * @testdox setNameはプロパティ$nameに引数の値をセットする
     */
    public function testSetName(): void
    {
        $pageRef = $this->createPageReflection();

        $namePropertyRef = $pageRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $name = 'page_name';
        $this->page->setName($name);
        $this->assertEquals($name, $namePropertyRef->getValue($this->page));
    }

    /**
     * @covers ::getNameJa
     * @test
     * @testdox getNameJaはプロパティ$nameの値を返す
     */
    public function testGatNameJa(): void
    {
        $nameJa = 'page_name_ja';

        $pageRef = $this->createPageReflection();

        $nameJaPropertyRef = $pageRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);
        $nameJaPropertyRef->setValue($this->page, $nameJa);

        $this->assertEquals($nameJa, $this->page->getNameJa());
    }

    /**
     * @covers ::setNameJa
     * @test
     * @testdox setNameJaはプロパティ$nameJaに引数の値をセットする
     */
    public function testSetNameJa(): void
    {
        $pageRef = $this->createPageReflection();

        $nameJaPropertyRef = $pageRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);

        $nameJa = 'page_name_ja';
        $this->page->setNameJa($nameJa);
        $this->assertEquals($nameJa, $nameJaPropertyRef->getValue($this->page));
    }

    /**
     * @covers ::getCampaigns
     * @test
     * @testdox getCampaignsはプロパティ$campaignsの値を返す
     */
    public function testGetCampaigns(): void
    {
        $campaigns = new ArrayCollection();

        $pageRef = $this->createPageReflection();

        $campaignsPropertyRef = $pageRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $campaignsPropertyRef->setValue($this->page, $campaigns);

        $this->assertEquals($campaigns, $this->page->getCampaigns());
    }

    /**
     * @covers ::getMainBanners
     * @test
     * @testdox getMainBannersはプロパティ$mainBannersの値を返す
     */
    public function testGetMainBanners(): void
    {
        $mainBanners = new ArrayCollection();

        $pageRef = $this->createPageReflection();

        $mainBannersPropertyRef = $pageRef->getProperty('mainBanners');
        $mainBannersPropertyRef->setAccessible(true);
        $mainBannersPropertyRef->setValue($this->page, $mainBanners);

        $this->assertEquals($mainBanners, $this->page->getMainBanners());
    }

    /**
     * @covers ::getNewsList
     * @test
     * @testdox getNewsListはプロパティ$newsListの値を返す
     */
    public function testGetNewsList(): void
    {
        $newsList = new ArrayCollection();

        $pageRef = $this->createPageReflection();

        $newsListPropertyRef = $pageRef->getProperty('newsList');
        $newsListPropertyRef->setAccessible(true);
        $newsListPropertyRef->setValue($this->page, $newsList);

        $this->assertEquals($newsList, $this->page->getNewsList());
    }

    /**
     * @covers ::getTrailers
     * @test
     * @testdox getTrailersはプロパティ$trailersの値を返す
     */
    public function testGetTrailers(): void
    {
        $trailers = new ArrayCollection();

        $pageRef = $this->createPageReflection();

        $trailersPropertyRef = $pageRef->getProperty('trailers');
        $trailersPropertyRef->setAccessible(true);
        $trailersPropertyRef->setValue($this->page, $trailers);

        $this->assertEquals($trailers, $this->page->getTrailers());
    }
}
