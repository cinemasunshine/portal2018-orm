<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\News;
use Cinemasunshine\ORM\Entities\Page;
use Cinemasunshine\ORM\Entities\PageNews;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * PageNews test
 */
final class PageNewsTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return PageNews&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(PageNews::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return ReflectionClass<PageNews>
     */
    public function createTargetReflection()
    {
        return new ReflectionClass(PageNews::class);
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
        $id = 26;

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
     *
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
     *
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
     * test getPage
     *
     * @test
     *
     * @return void
     */
    public function testGetPage()
    {
        $page = new Page(8);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $pagePropertyRef = $targetRef->getProperty('page');
        $pagePropertyRef->setAccessible(true);
        $pagePropertyRef->setValue($targetMock, $page);

        $this->assertEquals($page, $targetMock->getPage());
    }

    /**
     * test setPage
     *
     * @test
     *
     * @return void
     */
    public function testSetPage()
    {
        $page = new Page(8);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setPage($page);

        $targetRef = $this->createTargetReflection();

        $pagePropertyRef = $targetRef->getProperty('page');
        $pagePropertyRef->setAccessible(true);

        $this->assertEquals($page, $pagePropertyRef->getValue($targetMock));
    }

    /**
     * test getDisplayOrder
     *
     * @test
     *
     * @return void
     */
    public function testGetDisplayOrder()
    {
        $displayOrder = 7;

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
     *
     * @return void
     */
    public function testSetDisplayOrder()
    {
        $displayOrder = 7;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
