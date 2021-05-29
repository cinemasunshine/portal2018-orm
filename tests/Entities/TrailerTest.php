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
     * @testdox __constructはプロパティ$pageTrailers、$specialSiteTrailers、$theaterTrailersをArrayCollectionで初期化する
     */
    public function testConstruct(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $pageTrailersPropertyRef = $trailerRef->getProperty('pageTrailers');
        $pageTrailersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $pageTrailersPropertyRef->getValue($this->trailer)
        );

        $specialSiteTrailersPropertyRef = $trailerRef->getProperty('specialSiteTrailers');
        $specialSiteTrailersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $specialSiteTrailersPropertyRef->getValue($this->trailer)
        );

        $theaterTrailersPropertyRef = $trailerRef->getProperty('theaterTrailers');
        $theaterTrailersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $theaterTrailersPropertyRef->getValue($this->trailer)
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
     * @covers ::getPageTrailers
     * @test
     * @testdox getPageTrailersはプロパティ$pageTrailersの値を返す
     */
    public function testGetPageTrailers(): void
    {
        $pageTrailers = new ArrayCollection();

        $trailerRef = $this->createTrailerReflection();

        $pageTrailersPropertyRef = $trailerRef->getProperty('pageTrailers');
        $pageTrailersPropertyRef->setAccessible(true);
        $pageTrailersPropertyRef->setValue($this->trailer, $pageTrailers);

        $this->assertEquals($pageTrailers, $this->trailer->getPageTrailers());
    }

    /**
     * @covers ::setPageTrailers
     * @test
     * @testdox setPageTrailersはプロパティ$pageTrailersに引数の値をセットする
     */
    public function testSetPageTrailers(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $pageTrailersPropertyRef = $trailerRef->getProperty('pageTrailers');
        $pageTrailersPropertyRef->setAccessible(true);

        $pageTrailers = new ArrayCollection();
        $this->trailer->setPageTrailers($pageTrailers);
        $this->assertEquals($pageTrailers, $pageTrailersPropertyRef->getValue($this->trailer));
    }

    /**
     * @covers ::getSpecialSiteTrailers
     * @test
     * @testdox getSpecialSiteTrailersはプロパティ$specialSiteTrailersの値を返す
     */
    public function testGetSpecialSiteTrailers(): void
    {
        $specialSiteTrailers = new ArrayCollection();

        $trailerRef = $this->createTrailerReflection();

        $specialSiteTrailersPropertyRef = $trailerRef->getProperty('specialSiteTrailers');
        $specialSiteTrailersPropertyRef->setAccessible(true);
        $specialSiteTrailersPropertyRef->setValue($this->trailer, $specialSiteTrailers);

        $this->assertEquals($specialSiteTrailers, $this->trailer->getSpecialSiteTrailers());
    }

    /**
     * @covers ::setSpecialSiteTrailers
     * @test
     * @testdox setSpecialSiteTrailersはプロパティ$specialSiteTrailersに引数の値をセットする
     */
    public function testSetSpecialSiteTrailers(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $specialSiteTrailersPropertyRef = $trailerRef->getProperty('specialSiteTrailers');
        $specialSiteTrailersPropertyRef->setAccessible(true);

        $specialSiteTrailers = new ArrayCollection();
        $this->trailer->setSpecialSiteTrailers($specialSiteTrailers);
        $this->assertEquals($specialSiteTrailers, $specialSiteTrailersPropertyRef->getValue($this->trailer));
    }

    /**
     * @covers ::getTheaterTrailers
     * @test
     * @testdox getTheaterTrailersはプロパティ$theaterTrailersの値を返す
     */
    public function testGetTheaterTrailers(): void
    {
        $theaterTrailers = new ArrayCollection();

        $trailerRef = $this->createTrailerReflection();

        $theaterTrailersPropertyRef = $trailerRef->getProperty('theaterTrailers');
        $theaterTrailersPropertyRef->setAccessible(true);
        $theaterTrailersPropertyRef->setValue($this->trailer, $theaterTrailers);

        $this->assertEquals($theaterTrailers, $this->trailer->getTheaterTrailers());
    }

    /**
     * @covers ::setTheaterTrailers
     * @test
     * @testdox setTheaterTrailersはプロパティ$theaterTrailersに引数の値をセットする
     */
    public function testSetTheaterTrailers(): void
    {
        $trailerRef = $this->createTrailerReflection();

        $theaterTrailersPropertyRef = $trailerRef->getProperty('theaterTrailers');
        $theaterTrailersPropertyRef->setAccessible(true);

        $theaterTrailers = new ArrayCollection();
        $this->trailer->setTheaterTrailers($theaterTrailers);
        $this->assertEquals($theaterTrailers, $theaterTrailersPropertyRef->getValue($this->trailer));
    }
}
