<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\File;
use Cinemasunshine\ORM\Entities\MainBanner;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

final class MainBannerTest extends TestCase
{
    /**
     * @return MainBanner&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(MainBanner::class);
    }

    /**
     * @param string[] $methods
     * @return MainBanner&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(MainBanner::class, $methods);
    }

    /**
     * @return ReflectionClass<MainBanner>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(MainBanner::class);
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

        $pagesPropertyRef = $targetRef->getProperty('pages');
        $pagesPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $pagesPropertyRef->getValue($targetMock)
        );

        $specialSitesPropertyRef = $targetRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $specialSitesPropertyRef->getValue($targetMock)
        );

        $theatersPropertyRef = $targetRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $theatersPropertyRef->getValue($targetMock)
        );
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 23;

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
    public function testGetImage(): void
    {
        $image = new File();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $imagePropertyRef = $targetRef->getProperty('image');
        $imagePropertyRef->setAccessible(true);
        $imagePropertyRef->setValue($targetMock, $image);

        $this->assertEquals($image, $targetMock->getImage());
    }

    /**
     * @test
     */
    public function testSetImage(): void
    {
        $image = new File();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setImage($image);

        $targetRef = $this->createTargetReflection();

        $imagePropertyRef = $targetRef->getProperty('image');
        $imagePropertyRef->setAccessible(true);

        $this->assertEquals($image, $imagePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetName(): void
    {
        $name = 'main_banner_name';

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
        $name = 'main_banner_name';

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
    public function testGetLinkType(): void
    {
        $linkType = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $linkTypePropertyRef = $targetRef->getProperty('linkType');
        $linkTypePropertyRef->setAccessible(true);
        $linkTypePropertyRef->setValue($targetMock, $linkType);

        $this->assertEquals($linkType, $targetMock->getLinkType());
    }

    /**
     * @test
     */
    public function testSetLinkType(): void
    {
        $linkType = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setLinkType($linkType);

        $targetRef = $this->createTargetReflection();

        $linkTypePropertyRef = $targetRef->getProperty('linkType');
        $linkTypePropertyRef->setAccessible(true);

        $this->assertEquals($linkType, $linkTypePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetLinkUrl(): void
    {
        $linkUrl = 'https://example.com';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $linkUrlPropertyRef = $targetRef->getProperty('linkUrl');
        $linkUrlPropertyRef->setAccessible(true);
        $linkUrlPropertyRef->setValue($targetMock, $linkUrl);

        $this->assertEquals($linkUrl, $targetMock->getLinkUrl());
    }

    /**
     * @test
     */
    public function testSetLinkUrl(): void
    {
        $linkUrl = 'https://example.com';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setLinkUrl($linkUrl);

        $targetRef = $this->createTargetReflection();

        $linkUrlPropertyRef = $targetRef->getProperty('linkUrl');
        $linkUrlPropertyRef->setAccessible(true);

        $this->assertEquals($linkUrl, $linkUrlPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetPages(): void
    {
        $pages = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $pagesPropertyRef = $targetRef->getProperty('pages');
        $pagesPropertyRef->setAccessible(true);
        $pagesPropertyRef->setValue($targetMock, $pages);

        $this->assertEquals($pages, $targetMock->getPages());
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
    public function testGetTheaters(): void
    {
        $theaters = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $theatersPropertyRef = $targetRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $theatersPropertyRef->setValue($targetMock, $theaters);

        $this->assertEquals($theaters, $targetMock->getTheaters());
    }
}
