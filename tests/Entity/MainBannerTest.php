<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\File;
use Cinemasunshine\ORM\Entity\MainBanner;
use PHPUnit\Framework\TestCase;

/**
 * MainBanner test
 */
final class MainBannerTest extends TestCase
{
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
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 23;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getImage
     *
     * @test
     * @return void
     */
    public function testGetImage()
    {
        $image = new File();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $imagePropertyRef = $targetRef->getProperty('image');
        $imagePropertyRef->setAccessible(true);
        $imagePropertyRef->setValue($targetMock, $image);

        $this->assertEquals($image, $targetMock->getImage());
    }

    /**
     * test setImage
     *
     * @test
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
     * @return void
     */
    public function testGetName()
    {
        $name = 'main_banner_name';
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
     * @return void
     */
    public function testGetLinkType()
    {
        $linkType = 2;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $linkTypePropertyRef = $targetRef->getProperty('linkType');
        $linkTypePropertyRef->setAccessible(true);
        $linkTypePropertyRef->setValue($targetMock, $linkType);

        $this->assertEquals($linkType, $targetMock->getLinkType());
    }

    /**
     * test setLinkType
     *
     * @test
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
     * @return void
     */
    public function testGetLinkUrl()
    {
        $linkUrl = 'https://example.com';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $linkUrlPropertyRef = $targetRef->getProperty('linkUrl');
        $linkUrlPropertyRef->setAccessible(true);
        $linkUrlPropertyRef->setValue($targetMock, $linkUrl);

        $this->assertEquals($linkUrl, $targetMock->getLinkUrl());
    }

    /**
     * test setLinkUrl
     *
     * @test
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
}
