<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\File;
use Cinemasunshine\ORM\Entities\Title;
use Cinemasunshine\ORM\Entities\Trailer;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

final class TrailerTest extends TestCase
{
    /**
     * @return Trailer&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Trailer::class);
    }

    /**
     * @param string[] $methods
     * @return Trailer&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Trailer::class, $methods);
    }

    /**
     * @return ReflectionClass<Trailer>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(Trailer::class);
    }

    /**
     * @test
     */
    public function testConstruct(): void
    {
        $targetMock = $this->createTargetMock();
        $targetRef  = $this->createTargetReflection();

        /** @var ReflectionMethod $constructorRef */
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
     * @test
     */
    public function testGetId(): void
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
     * @test
     */
    public function testGetTitle(): void
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
     * @test
     */
    public function testSetTitle(): void
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
     * @test
     */
    public function testGetName(): void
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
     * @test
     */
    public function testSetName(): void
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
     * @test
     */
    public function testGetYoutube(): void
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
     * @test
     */
    public function testSetYoutube(): void
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
     * @test
     */
    public function testBannerImage(): void
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
     * @test
     */
    public function testSetBannerImage(): void
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
     * @test
     */
    public function testGetBannerLinkUrl(): void
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
     * @test
     */
    public function testSetBannerLinkUrl(): void
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
     * @test
     */
    public function testGetPageTrailers(): void
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
     * @test
     */
    public function testSetPageTrailers(): void
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
     * @test
     */
    public function testGetSpecialSiteTrailers(): void
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
     * @test
     */
    public function testSetSpecialSiteTrailers(): void
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
     * @test
     */
    public function testGetTheaterTrailers(): void
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
     * @test
     */
    public function testSetTheaterTrailers(): void
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
