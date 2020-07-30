<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Page;
use Cinemasunshine\ORM\Entities\PageTrailer;
use Cinemasunshine\ORM\Entities\Trailer;
use PHPUnit\Framework\TestCase;

/**
 * PageTrailer test
 */
final class PageTrailerTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return PageTrailer&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(PageTrailer::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return PageTrailer&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(PageTrailer::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<PageTrailer>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(PageTrailer::class);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 16;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getTrailer
     *
     * @test
     * @return void
     */
    public function testGetTrailer()
    {
        $trailer = new Trailer();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $trailerPropertyRef = $targetRef->getProperty('trailer');
        $trailerPropertyRef->setAccessible(true);
        $trailerPropertyRef->setValue($targetMock, $trailer);

        $this->assertEquals($trailer, $targetMock->getTrailer());
    }

    /**
     * test setTrailer
     *
     * @test
     * @return void
     */
    public function testSetTrailer()
    {
        $trailer = new Trailer();
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTrailer($trailer);

        $targetRef = $this->createTargetReflection();
        $trailerPropertyRef = $targetRef->getProperty('trailer');
        $trailerPropertyRef->setAccessible(true);

        $this->assertEquals($trailer, $trailerPropertyRef->getValue($targetMock));
    }

    /**
     * test getPage
     *
     * @test
     * @return void
     */
    public function testGetPage()
    {
        $page = new Page(2);
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $pagePropertyRef = $targetRef->getProperty('page');
        $pagePropertyRef->setAccessible(true);
        $pagePropertyRef->setValue($targetMock, $page);

        $this->assertEquals($page, $targetMock->getPage());
    }

    /**
     * test setPage
     *
     * @test
     * @return void
     */
    public function testSetPage()
    {
        $page = new Page(2);
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setPage($page);

        $targetRef = $this->createTargetReflection();
        $pagePropertyRef = $targetRef->getProperty('page');
        $pagePropertyRef->setAccessible(true);

        $this->assertEquals($page, $pagePropertyRef->getValue($targetMock));
    }
}
