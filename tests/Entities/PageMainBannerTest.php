<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\MainBanner;
use Cinemasunshine\ORM\Entities\Page;
use Cinemasunshine\ORM\Entities\PageMainBanner;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class PageMainBannerTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return PageMainBanner&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(PageMainBanner::class, $methods);
    }

    /**
     * @return ReflectionClass<PageMainBanner>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(PageMainBanner::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
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
     * @test
     */
    public function testGetMainBanner(): void
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
     * @test
     */
    public function testSetMainBanner(): void
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
     * @test
     */
    public function testGetPage(): void
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
     * @test
     */
    public function testSetPage(): void
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
     * @test
     */
    public function testGetDisplayOrder(): void
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
     * @test
     */
    public function testSetDisplayOrder(): void
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
