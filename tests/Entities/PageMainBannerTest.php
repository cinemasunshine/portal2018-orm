<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\MainBanner;
use Cinemasunshine\ORM\Entities\PageMainBanner;
use Cinemasunshine\ORM\Entities\Page;
use PHPUnit\Framework\TestCase;

/**
 * PageMainBanner test
 */
final class PageMainBannerTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return PageMainBanner&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(PageMainBanner::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<PageMainBanner>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(PageMainBanner::class);
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
        $id = 24;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getMainBanner
     *
     * @test
     *
     * @return void
     */
    public function testGetMainBanner()
    {
        $mainBanner = new MainBanner();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $mainBannerPropertyRef = $targetRef->getProperty('mainBanner');
        $mainBannerPropertyRef->setAccessible(true);
        $mainBannerPropertyRef->setValue($targetMock, $mainBanner);

        $this->assertEquals($mainBanner, $targetMock->getMainBanner());
    }

    /**
     * test setMainBanner
     *
     * @test
     *
     * @return void
     */
    public function testSetMainBanner()
    {
        $mainBanner = new MainBanner();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setMainBanner($mainBanner);

        $targetRef = $this->createTargetReflection();

        $mainBannerPropertyRef = $targetRef->getProperty('mainBanner');
        $mainBannerPropertyRef->setAccessible(true);

        $this->assertEquals($mainBanner, $mainBannerPropertyRef->getValue($targetMock));
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
        $page = new Page(6);

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
        $page = new Page(6);

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
        $displayOrder = 5;

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
        $displayOrder = 5;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
