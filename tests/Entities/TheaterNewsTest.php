<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\News;
use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\TheaterNews;
use PHPUnit\Framework\TestCase;

/**
 * TheaterNews test
 */
final class TheaterNewsTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return TheaterNews&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterNews::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<TheaterNews>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(TheaterNews::class);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 30;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

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
        $targetRef  = $this->createTargetReflection();

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
     * test getTheater
     *
     * @test
     * @return void
     */
    public function testGetTheater()
    {
        $theater = new Theater(10);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);
        $theaterPropertyRef->setValue($targetMock, $theater);

        $this->assertEquals($theater, $targetMock->getTheater());
    }

    /**
     * test setTheater
     *
     * @test
     * @return void
     */
    public function testSetTheater()
    {
        $theater = new Theater(10);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheater($theater);

        $targetRef = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);

        $this->assertEquals($theater, $theaterPropertyRef->getValue($targetMock));
    }

    /**
     * test getDisplayOrder
     *
     * @test
     * @return void
     */
    public function testGetDisplayOrder()
    {
        $displayOrder = 8;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

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
        $displayOrder = 8;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
