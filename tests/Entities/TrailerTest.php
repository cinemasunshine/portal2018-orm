<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\File;
use Cinemasunshine\ORM\Entities\Title;
use Cinemasunshine\ORM\Entities\Trailer;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Trailer test
 */
final class TrailerTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return Trailer&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Trailer::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return Trailer&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Trailer::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<Trailer>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(Trailer::class);
    }

    /**
     * test construct
     *
     * @test
     *
     * @return void
     */
    public function testConstruct()
    {
        $targetMock = $this->createTargetMock();
        $targetRef  = $this->createTargetReflection();

        /** @var \ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock);

        $pageTrailersPropertyRef = $targetRef->getProperty('pageTrailers');
        $pageTrailersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $pageTrailersPropertyRef->getValue($targetMock)
        );

        $specialSiteTrailersPropertyRef = $targetRef->getProperty('specialSiteTrailers');
        $specialSiteTrailersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $specialSiteTrailersPropertyRef->getValue($targetMock)
        );

        $theaterTrailersPropertyRef = $targetRef->getProperty('theaterTrailers');
        $theaterTrailersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $theaterTrailersPropertyRef->getValue($targetMock)
        );
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
        $id = 6;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getTitle
     *
     * @test
     *
     * @return void
     */
    public function testGetTitle()
    {
        $title = new Title();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $titlePropertyRef = $targetRef->getProperty('title');
        $titlePropertyRef->setAccessible(true);
        $titlePropertyRef->setValue($targetMock, $title);

        $this->assertEquals($title, $targetMock->getTitle());
    }

    /**
     * test setTitle
     *
     * @test
     *
     * @return void
     */
    public function testSetTitle()
    {
        $title = new Title();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTitle($title);

        $targetRef = $this->createTargetReflection();

        $titlePropertyRef = $targetRef->getProperty('title');
        $titlePropertyRef->setAccessible(true);

        $this->assertEquals($title, $titlePropertyRef->getValue($targetMock));
    }

    /**
     * test getName
     *
     * @test
     *
     * @return void
     */
    public function testGetName()
    {
        $name = 'trailer_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($targetMock, $name);

        $this->assertEquals($name, $targetMock->getName());
    }

    /**
     * test setName
     *
     * @test
     *
     * @return void
     */
    public function testSetName()
    {
        $name = 'trailer_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setName($name);

        $targetRef = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $this->assertEquals($name, $namePropertyRef->getValue($targetMock));
    }

    /**
     * test getYoutube
     *
     * @test
     *
     * @return void
     */
    public function testGetYoutube()
    {
        $youtube = 'trainer_youtube';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $youtubePropertyRef = $targetRef->getProperty('youtube');
        $youtubePropertyRef->setAccessible(true);
        $youtubePropertyRef->setValue($targetMock, $youtube);

        $this->assertEquals($youtube, $targetMock->getYoutube());
    }

    /**
     * test setYoutube
     *
     * @test
     *
     * @return void
     */
    public function testSetYoutube()
    {
        $youtube = 'trainer_youtube';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setYoutube($youtube);

        $targetRef = $this->createTargetReflection();

        $youtubePropertyRef = $targetRef->getProperty('youtube');
        $youtubePropertyRef->setAccessible(true);

        $this->assertEquals($youtube, $youtubePropertyRef->getValue($targetMock));
    }

    /**
     * test getBannerImage
     *
     * @test
     *
     * @return void
     */
    public function testBannerImage()
    {
        $bannerImage = new File();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $bannerImagePropertyRef = $targetRef->getProperty('bannerImage');
        $bannerImagePropertyRef->setAccessible(true);
        $bannerImagePropertyRef->setValue($targetMock, $bannerImage);

        $this->assertEquals($bannerImage, $targetMock->getBannerImage());
    }

    /**
     * test setBannerImage
     *
     * @test
     *
     * @return void
     */
    public function testSetBannerImage()
    {
        $bannerImage = new File();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setBannerImage($bannerImage);

        $targetRef = $this->createTargetReflection();

        $bannerImagePropertyRef = $targetRef->getProperty('bannerImage');
        $bannerImagePropertyRef->setAccessible(true);

        $this->assertEquals($bannerImage, $bannerImagePropertyRef->getValue($targetMock));
    }

    /**
     * test getBannerLinkUrl
     *
     * @test
     *
     * @return void
     */
    public function testGetBannerLinkUrl()
    {
        $bannerLinkUrl = 'https://example.com';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $bannerLinkUrlPropertyRef = $targetRef->getProperty('bannerLinkUrl');
        $bannerLinkUrlPropertyRef->setAccessible(true);
        $bannerLinkUrlPropertyRef->setValue($targetMock, $bannerLinkUrl);

        $this->assertEquals($bannerLinkUrl, $targetMock->getBannerLinkUrl());
    }

    /**
     * test setBannerLinkUrl
     *
     * @test
     *
     * @return void
     */
    public function testSetBannerLinkUrl()
    {
        $bannerLinkUrl = 'https://example.com';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setBannerLinkUrl($bannerLinkUrl);

        $targetRef = $this->createTargetReflection();

        $bannerLinkUrlPropertyRef = $targetRef->getProperty('bannerLinkUrl');
        $bannerLinkUrlPropertyRef->setAccessible(true);

        $this->assertEquals($bannerLinkUrl, $bannerLinkUrlPropertyRef->getValue($targetMock));
    }

    /**
     * test getPageTrailers
     *
     * @test
     *
     * @return void
     */
    public function testGetPageTrailers()
    {
        $pageTrailers = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $pageTrailersPropertyRef = $targetRef->getProperty('pageTrailers');
        $pageTrailersPropertyRef->setAccessible(true);
        $pageTrailersPropertyRef->setValue($targetMock, $pageTrailers);

        $this->assertEquals($pageTrailers, $targetMock->getPageTrailers());
    }

    /**
     * test setPageTrailers
     *
     * @test
     *
     * @return void
     */
    public function testSetPageTrailers()
    {
        $pageTrailers = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setPageTrailers($pageTrailers);

        $targetRef = $this->createTargetReflection();

        $pageTrailersPropertyRef = $targetRef->getProperty('pageTrailers');
        $pageTrailersPropertyRef->setAccessible(true);

        $this->assertEquals($pageTrailers, $pageTrailersPropertyRef->getValue($targetMock));
    }

    /**
     * test getSpecialSiteTrailers
     *
     * @test
     *
     * @return void
     */
    public function testGetSpecialSiteTrailers()
    {
        $specialSiteTrailers = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialSiteTrailersPropertyRef = $targetRef->getProperty('specialSiteTrailers');
        $specialSiteTrailersPropertyRef->setAccessible(true);
        $specialSiteTrailersPropertyRef->setValue($targetMock, $specialSiteTrailers);

        $this->assertEquals($specialSiteTrailers, $targetMock->getSpecialSiteTrailers());
    }

    /**
     * test setSpecialSiteTrailers
     *
     * @test
     *
     * @return void
     */
    public function testSetSpecialSiteTrailers()
    {
        $specialSiteTrailers = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSpecialSiteTrailers($specialSiteTrailers);

        $targetRef = $this->createTargetReflection();

        $specialSiteTrailersPropertyRef = $targetRef->getProperty('specialSiteTrailers');
        $specialSiteTrailersPropertyRef->setAccessible(true);

        $this->assertEquals($specialSiteTrailers, $specialSiteTrailersPropertyRef->getValue($targetMock));
    }

    /**
     * test getTheaterTrailers
     *
     * @test
     *
     * @return void
     */
    public function testGetTheaterTrailers()
    {
        $theaterTrailers = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $theaterTrailersPropertyRef = $targetRef->getProperty('theaterTrailers');
        $theaterTrailersPropertyRef->setAccessible(true);
        $theaterTrailersPropertyRef->setValue($targetMock, $theaterTrailers);

        $this->assertEquals($theaterTrailers, $targetMock->getTheaterTrailers());
    }

    /**
     * test setTheaterTrailers
     *
     * @test
     *
     * @return void
     */
    public function testSetTheaterTrailers()
    {
        $theaterTrailers = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheaterTrailers($theaterTrailers);

        $targetRef = $this->createTargetReflection();

        $theaterTrailersPropertyRef = $targetRef->getProperty('theaterTrailers');
        $theaterTrailersPropertyRef->setAccessible(true);

        $this->assertEquals($theaterTrailers, $theaterTrailersPropertyRef->getValue($targetMock));
    }
}
