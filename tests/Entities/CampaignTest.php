<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Campaign;
use Cinemasunshine\ORM\Entities\File;
use Cinemasunshine\ORM\Entities\Title;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

final class CampaignTest extends TestCase
{
    /**
     * @return Campaign&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Campaign::class);
    }

    /**
     * @param string[] $methods
     * @return Campaign&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Campaign::class, $methods);
    }

    /**
     * @return ReflectionClass<Campaign>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(Campaign::class);
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
        $id = 21;

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
        $name = 'campaign_name';

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
        $name = 'campaign_name';

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
    public function testGetStartDt(): void
    {
        $startDt = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $startDtPropertyRef = $targetRef->getProperty('startDt');
        $startDtPropertyRef->setAccessible(true);
        $startDtPropertyRef->setValue($targetMock, $startDt);

        $this->assertEquals($startDt, $targetMock->getStartDt());
    }

    /**
     * @test
     */
    public function testSetStartDt(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $startDtPropertyRef = $targetRef->getProperty('startDt');
        $startDtPropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setStartDt($dtObject);
        $this->assertEquals($dtObject, $startDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setStartDt($dtString);
        $this->assertInstanceOf(
            DateTime::class,
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
     */
    public function testSetStartDtInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setStartDt(null);
    }

    /**
     * @test
     */
    public function testGetEndDt(): void
    {
        $endDt = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $endDtPropertyRef = $targetRef->getProperty('endDt');
        $endDtPropertyRef->setAccessible(true);
        $endDtPropertyRef->setValue($targetMock, $endDt);

        $this->assertEquals($endDt, $targetMock->getEndDt());
    }

    /**
     * @test
     */
    public function testSetEndDt(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $endDtPropertyRef = $targetRef->getProperty('endDt');
        $endDtPropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setEndDt($dtObject);
        $this->assertEquals($dtObject, $endDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setEndDt($dtString);
        $this->assertInstanceOf(
            DateTime::class,
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
     */
    public function testSetEndDtInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setEndDt(null);
    }

    /**
     * @test
     */
    public function testGetUrl(): void
    {
        $url = 'https://example.com';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $urlPropertyRef = $targetRef->getProperty('url');
        $urlPropertyRef->setAccessible(true);
        $urlPropertyRef->setValue($targetMock, $url);

        $this->assertEquals($url, $targetMock->getUrl());
    }

    /**
     * @test
     */
    public function testSetUrl(): void
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
    public function testGetSpecialSite(): void
    {
        $specialSites = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialSitesPropertyRef = $targetRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $specialSitesPropertyRef->setValue($targetMock, $specialSites);

        $this->assertEquals($specialSites, $targetMock->getSpecialSite());
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
