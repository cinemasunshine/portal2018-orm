<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\Campaign;
use Cinemasunshine\ORM\Entity\File;
use Cinemasunshine\ORM\Entity\Title;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Campaign test
 */
final class CampaignTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return Campaign&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Campaign::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return Campaign&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Campaign::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<Campaign>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(Campaign::class);
    }

    /**
     * test construct
     *
     * @test
     * @return void
     */
    public function testConstruct()
    {
        $targetMock = $this->createTargetMock();
        $targetRef = $this->createTargetReflection();

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
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 21;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getTitle
     *
     * @test
     * @return void
     */
    public function testGetTitle()
    {
        $title = new Title();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $titlePropertyRef = $targetRef->getProperty('title');
        $titlePropertyRef->setAccessible(true);
        $titlePropertyRef->setValue($targetMock, $title);

        $this->assertEquals($title, $targetMock->getTitle());
    }

    /**
     * test setTitle
     *
     * @test
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
        $name = 'campaign_name';
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
        $name = 'campaign_name';
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setName($name);

        $targetRef = $this->createTargetReflection();
        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $this->assertEquals($name, $namePropertyRef->getValue($targetMock));
    }

    /**
     * test getStartDt
     *
     * @test
     * @return void
     */
    public function testGetStartDt()
    {
        $startDt = new \DateTime();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $startDtPropertyRef = $targetRef->getProperty('startDt');
        $startDtPropertyRef->setAccessible(true);
        $startDtPropertyRef->setValue($targetMock, $startDt);

        $this->assertEquals($startDt, $targetMock->getStartDt());
    }

    /**
     * test setStartDt
     *
     * @test
     * @return void
     */
    public function testSetStartDt()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $startDtPropertyRef = $targetRef->getProperty('startDt');
        $startDtPropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setStartDt($dtObject);
        $this->assertEquals($dtObject, $startDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setStartDt($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
            $startDtPropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $startDtPropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setStartDt (invalid argument)
     *
     * @test
     * @return void
     */
    public function testSetStartDtInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setStartDt(null);
    }

    /**
     * test getEndDt
     *
     * @test
     * @return void
     */
    public function testGetEndDt()
    {
        $endDt = new \DateTime();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $endDtPropertyRef = $targetRef->getProperty('endDt');
        $endDtPropertyRef->setAccessible(true);
        $endDtPropertyRef->setValue($targetMock, $endDt);

        $this->assertEquals($endDt, $targetMock->getEndDt());
    }

    /**
     * test setEndDt
     *
     * @test
     * @return void
     */
    public function testSetEndDt()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $endDtPropertyRef = $targetRef->getProperty('endDt');
        $endDtPropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setEndDt($dtObject);
        $this->assertEquals($dtObject, $endDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setEndDt($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
            $endDtPropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $endDtPropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setEndDt (invalid argument)
     *
     * @test
     * @return void
     */
    public function testSetEndDtInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setEndDt(null);
    }

    /**
     * test getUrl
     *
     * @test
     * @return void
     */
    public function testGetUrl()
    {
        $url = 'https://example.com';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $urlPropertyRef = $targetRef->getProperty('url');
        $urlPropertyRef->setAccessible(true);
        $urlPropertyRef->setValue($targetMock, $url);

        $this->assertEquals($url, $targetMock->getUrl());
    }

    /**
     * test setUrl
     *
     * @test
     * @return void
     */
    public function testSetUrl()
    {
        $url = 'https://example.com';
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUrl($url);

        $targetRef = $this->createTargetReflection();
        $urlPropertyRef = $targetRef->getProperty('url');
        $urlPropertyRef->setAccessible(true);

        $this->assertEquals($url, $urlPropertyRef->getValue($targetMock));
    }

    /**
     * test getPages
     *
     * @test
     * @return void
     */
    public function testGetPages()
    {
        $pages = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $pagesPropertyRef = $targetRef->getProperty('pages');
        $pagesPropertyRef->setAccessible(true);
        $pagesPropertyRef->setValue($targetMock, $pages);

        $this->assertEquals($pages, $targetMock->getPages());
    }

    /**
     * test getSpecialSite
     *
     * @test
     * @return void
     */
    public function testGetSpecialSite()
    {
        $specialSites = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $specialSitesPropertyRef = $targetRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $specialSitesPropertyRef->setValue($targetMock, $specialSites);

        $this->assertEquals($specialSites, $targetMock->getSpecialSite());
    }
}
