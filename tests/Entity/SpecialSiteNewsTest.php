<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\News;
use Cinemasunshine\ORM\Entity\SpecialSite;
use Cinemasunshine\ORM\Entity\SpecialSiteNews;
use PHPUnit\Framework\TestCase;

/**
 * SpecialSiteNews test
 */
final class SpecialSiteNewsTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return SpecialSiteNews&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SpecialSiteNews::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<SpecialSiteNews>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(SpecialSiteNews::class);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 27;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getNews
     *
     * @test
     * @return void
     */
    public function testGetNews()
    {
        $news = new News();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $newsPropertyRef = $targetRef->getProperty('news');
        $newsPropertyRef->setAccessible(true);
        $newsPropertyRef->setValue($targetMock, $news);

        $this->assertEquals($news, $targetMock->getNews());
    }

    /**
     * test setNews
     *
     * @test
     * @return void
     */
    public function testSetNews()
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
     * test getSpecialSite
     *
     * @test
     * @return void
     */
    public function testGetSpecialSite()
    {
        $specialSite = new SpecialSite(3);
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);
        $specialSitePropertyRef->setValue($targetMock, $specialSite);

        $this->assertEquals($specialSite, $targetMock->getSpecialSite());
    }

    /**
     * test setSpecialSite
     *
     * @test
     * @return void
     */
    public function testSetSpecialSite()
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
     * test getDisplayOrder
     *
     * @test
     * @return void
     */
    public function testGetDisplayOrder()
    {
        $displayOrder = 9;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);
        $displayOrderPropertyRef->setValue($targetMock, $displayOrder);

        $this->assertEquals($displayOrder, $targetMock->getDisplayOrder());
    }

    /**
     * test setDisplayOrder
     *
     * @test
     * @return void
     */
    public function testSetDisplayOrder()
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
