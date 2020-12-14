<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\File;
use Cinemasunshine\ORM\Entities\MainBanner;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * MainBanner test
 */
final class MainBannerTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return MainBanner&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(MainBanner::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return MainBanner&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(MainBanner::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<MainBanner>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(MainBanner::class);
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
     * test getId
     *
     * @test
     *
     * @return void
     */
    public function testGetId()
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
     * test getImage
     *
     * @test
     *
     * @return void
     */
    public function testGetImage()
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
     * test setImage
     *
     * @test
     *
     * @return void
     */
    public function testSetImage()
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
     * test getName
     *
     * @test
     *
     * @return void
     */
    public function testGetName()
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
     * test setName
     *
     * @test
     *
     * @return void
     */
    public function testSetName()
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
     * test getLinkType
     *
     * @test
     *
     * @return void
     */
    public function testGetLinkType()
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
     * test setLinkType
     *
     * @test
     *
     * @return void
     */
    public function testSetLinkType()
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
     * test getLinkUrl
     *
     * @test
     *
     * @return void
     */
    public function testGetLinkUrl()
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
     * test setLinkUrl
     *
     * @test
     *
     * @return void
     */
    public function testSetLinkUrl()
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
     * test getPages
     *
     * @test
     *
     * @return void
     */
    public function testGetPages()
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
     * test getSpecialSites
     *
     * @test
     *
     * @return void
     */
    public function testGetSpecialSites()
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
     * test getTheaters
     *
     * @test
     *
     * @return void
     */
    public function testGetTheaters()
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
