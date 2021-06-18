<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\File;
use Cinemasunshine\ORM\Entities\Title;
use Cinemasunshine\ORM\Entities\Trailer;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @coversDefaultClass \Cinemasunshine\ORM\Entities\Trailer
 */
final class TrailerTest extends TestCase
{
    /** @var Trailer */
    protected $trailer;

    /**
     * @return ReflectionClass<Trailer>
     */
    protected function createTrailerReflection(): ReflectionClass
    {
        return new ReflectionClass(Trailer::class);
    }

    /**
     * @before
     */
    public function setUp(): void
    {
        $this->trailer = new Trailer();
    }

    /**
     * @covers ::__construct
     * @test
     * @testdox __constructはプロパティ$pages、$specialSites、$theatersをArrayCollectionで初期化する
     */
    public function testConstruct(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $pagesPropertyRef = $trailerRef->getProperty('pages');
        $pagesPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $pagesPropertyRef->getValue($this->trailer)
        );

        $specialSitesPropertyRef = $trailerRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $specialSitesPropertyRef->getValue($this->trailer)
        );

        $theatersPropertyRef = $trailerRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $theatersPropertyRef->getValue($this->trailer)
        );
    }

    /**
     * @covers ::getId
     * @test
     * @testdox getIdはプロパティ$idの値を返す
     */
    public function testGetId(): void
    {
        $id = 6;

        $trailerRef = $this->createTrailerReflection();

        $idPropertyRef = $trailerRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($this->trailer, $id);

        $this->assertEquals($id, $this->trailer->getId());
    }

    /**
     * @covers ::getTitle
     * @test
     * @testdox getTitleはプロパティ$titleの値を返す
     */
    public function testGetTitle(): void
    {
        $title = new Title();

        $trailerRef = $this->createTrailerReflection();

        $titlePropertyRef = $trailerRef->getProperty('title');
        $titlePropertyRef->setAccessible(true);
        $titlePropertyRef->setValue($this->trailer, $title);

        $this->assertEquals($title, $this->trailer->getTitle());
    }

    /**
     * @covers ::setTitle
     * @test
     * @testdox setTitleはプロパティ$titleに引数の値をセットする
     */
    public function testSetTitle(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $titlePropertyRef = $trailerRef->getProperty('title');
        $titlePropertyRef->setAccessible(true);

        $title = new Title();
        $this->trailer->setTitle($title);
        $this->assertEquals($title, $titlePropertyRef->getValue($this->trailer));
    }

    /**
     * @covers ::getName
     * @test
     * @testdox getNameはプロパティ$nameの値を返す
     */
    public function testGetName(): void
    {
        $name = 'trailer_name';

        $trailerRef = $this->createTrailerReflection();

        $namePropertyRef = $trailerRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($this->trailer, $name);

        $this->assertEquals($name, $this->trailer->getName());
    }

    /**
     * @covers ::setName
     * @test
     * @testdox setNameはプロパティ$nameに引数の値をセットする
     */
    public function testSetName(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $namePropertyRef = $trailerRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $name = 'trailer_name';
        $this->trailer->setName($name);
        $this->assertEquals($name, $namePropertyRef->getValue($this->trailer));
    }

    /**
     * @covers ::getYoutube
     * @test
     * @testdox getYoutubeはプロパティ$youtubeの値を返す
     */
    public function testGetYoutube(): void
    {
        $youtube = 'trainer_youtube';

        $trailerRef = $this->createTrailerReflection();

        $youtubePropertyRef = $trailerRef->getProperty('youtube');
        $youtubePropertyRef->setAccessible(true);
        $youtubePropertyRef->setValue($this->trailer, $youtube);

        $this->assertEquals($youtube, $this->trailer->getYoutube());
    }

    /**
     * @covers ::setYoutube
     * @test
     * @testdox setYoutubeはプロパティ$youtubeに引数の値をセットする
     */
    public function testSetYoutube(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $youtubePropertyRef = $trailerRef->getProperty('youtube');
        $youtubePropertyRef->setAccessible(true);

        $youtube = 'trailer_youtube';
        $this->trailer->setYoutube($youtube);
        $this->assertEquals($youtube, $youtubePropertyRef->getValue($this->trailer));
    }

    /**
     * @covers ::getBannerImage
     * @test
     * @testdox getBannerImageはプロパティ$bannerImageの値を返す
     */
    public function testBannerImage(): void
    {
        $bannerImage = new File();

        $trailerRef = $this->createTrailerReflection();

        $bannerImagePropertyRef = $trailerRef->getProperty('bannerImage');
        $bannerImagePropertyRef->setAccessible(true);
        $bannerImagePropertyRef->setValue($this->trailer, $bannerImage);

        $this->assertEquals($bannerImage, $this->trailer->getBannerImage());
    }

    /**
     * @covers ::setBannerImage
     * @test
     * @testdox setBannerImageはプロパティ$bannerImageに引数の値をセットする
     */
    public function testSetBannerImage(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $bannerImagePropertyRef = $trailerRef->getProperty('bannerImage');
        $bannerImagePropertyRef->setAccessible(true);

        $bannerImage = new File();
        $this->trailer->setBannerImage($bannerImage);
        $this->assertEquals($bannerImage, $bannerImagePropertyRef->getValue($this->trailer));
    }

    /**
     * @covers ::getBannerLinkUrl
     * @test
     * @testdox getBannerLinkUrlはプロパティ$bannerLinkUrlの値を返す
     */
    public function testGetBannerLinkUrl(): void
    {
        $bannerLinkUrl = 'https://example.com';

        $trailerRef = $this->createTrailerReflection();

        $bannerLinkUrlPropertyRef = $trailerRef->getProperty('bannerLinkUrl');
        $bannerLinkUrlPropertyRef->setAccessible(true);
        $bannerLinkUrlPropertyRef->setValue($this->trailer, $bannerLinkUrl);

        $this->assertEquals($bannerLinkUrl, $this->trailer->getBannerLinkUrl());
    }

    /**
     * @covers ::setBannerLinkUrl
     * @test
     * @testdox setBannerLinkUrlはプロパティ$bannerLinkUrlに引数の値をセットする
     */
    public function testSetBannerLinkUrl(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $bannerLinkUrlPropertyRef = $trailerRef->getProperty('bannerLinkUrl');
        $bannerLinkUrlPropertyRef->setAccessible(true);

        $bannerLinkUrl = 'https://example.com';
        $this->trailer->setBannerLinkUrl($bannerLinkUrl);
        $this->assertEquals($bannerLinkUrl, $bannerLinkUrlPropertyRef->getValue($this->trailer));
    }

    /**
     * @covers ::getPages
     * @test
     * @testdox getPagesはプロパティ$pagesの値を返す
     */
    public function testGetPages(): void
    {
        $pages = new ArrayCollection();

        $trailerRef = $this->createTrailerReflection();

        $pagesPropertyRef = $trailerRef->getProperty('pages');
        $pagesPropertyRef->setAccessible(true);
        $pagesPropertyRef->setValue($this->trailer, $pages);

        $this->assertEquals($pages, $this->trailer->getPages());
    }

    /**
     * @covers ::setPages
     * @test
     * @testdox setPagesはプロパティ$pagesに引数の値をセットする
     */
    public function testSetPages(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $pagesPropertyRef = $trailerRef->getProperty('pages');
        $pagesPropertyRef->setAccessible(true);

        $pages = new ArrayCollection();
        $this->trailer->setPages($pages);
        $this->assertEquals($pages, $pagesPropertyRef->getValue($this->trailer));
    }

    /**
     * @covers ::getSpecialSites
     * @test
     * @testdox getSpecialSitesはプロパティ$specialSitesの値を返す
     */
    public function testGetSpecialSites(): void
    {
        $specialSites = new ArrayCollection();

        $trailerRef = $this->createTrailerReflection();

        $specialSitesPropertyRef = $trailerRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $specialSitesPropertyRef->setValue($this->trailer, $specialSites);

        $this->assertEquals($specialSites, $this->trailer->getSpecialSites());
    }

    /**
     * @covers ::setSpecialSites
     * @test
     * @testdox setSpecialSitesはプロパティ$specialSitesに引数の値をセットする
     */
    public function testSetSpecialSites(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $specialSitesPropertyRef = $trailerRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);

        $specialSites = new ArrayCollection();
        $this->trailer->setSpecialSites($specialSites);
        $this->assertEquals($specialSites, $specialSitesPropertyRef->getValue($this->trailer));
    }

    /**
     * @covers ::getTheaters
     * @test
     * @testdox getTheatersはプロパティ$theatersの値を返す
     */
    public function testGetTheaters(): void
    {
        $theaters = new ArrayCollection();

        $trailerRef = $this->createTrailerReflection();

        $theatersPropertyRef = $trailerRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $theatersPropertyRef->setValue($this->trailer, $theaters);

        $this->assertEquals($theaters, $this->trailer->getTheaters());
    }

    /**
     * @covers ::setTheaters
     * @test
     * @testdox setTheatersはプロパティ$theatersに引数の値をセットする
     */
    public function testSetTheaterTrailers(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $theatersPropertyRef = $trailerRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);

        $theaterTrailers = new ArrayCollection();
        $this->trailer->setTheaters($theaterTrailers);
        $this->assertEquals($theaterTrailers, $theatersPropertyRef->getValue($this->trailer));
    }
}
