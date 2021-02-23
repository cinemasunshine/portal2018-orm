<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\News;
use Cinemasunshine\ORM\Entities\SpecialSite;
use Cinemasunshine\ORM\Entities\SpecialSiteNews;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class SpecialSiteNewsTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return SpecialSiteNews&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SpecialSiteNews::class, $methods);
    }

    /**
     * @return ReflectionClass<SpecialSiteNews>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(SpecialSiteNews::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 27;

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
    public function testGetNews(): void
    {
        $news = new News();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $newsPropertyRef = $targetRef->getProperty('news');
        $newsPropertyRef->setAccessible(true);
        $newsPropertyRef->setValue($targetMock, $news);

        $this->assertEquals($news, $targetMock->getNews());
    }

    /**
     * @test
     */
    public function testSetNews(): void
    {
        $news = new News();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setNews($news);

        $targetRef = $this->createTargetReflection();

        $newsPropertyRef = $targetRef->getProperty('news');
        $newsPropertyRef->setAccessible(true);

        $this->assertEquals($news, $newsPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetSpecialSite(): void
    {
        $specialSite = new SpecialSite(3);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);
        $specialSitePropertyRef->setValue($targetMock, $specialSite);

        $this->assertEquals($specialSite, $targetMock->getSpecialSite());
    }

    /**
     * @test
     */
    public function testSetSpecialSite(): void
    {
        $specialSite = new SpecialSite(3);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSpecialSite($specialSite);

        $targetRef = $this->createTargetReflection();

        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);

        $this->assertEquals($specialSite, $specialSitePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetDisplayOrder(): void
    {
        $displayOrder = 9;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);
        $displayOrderPropertyRef->setValue($targetMock, $displayOrder);

        $this->assertEquals($displayOrder, $targetMock->getDisplayOrder());
    }

    /**
     * @test
     */
    public function testSetDisplayOrder(): void
    {
        $displayOrder = 9;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
