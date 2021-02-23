<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Page;
use Cinemasunshine\ORM\Entities\PageTrailer;
use Cinemasunshine\ORM\Entities\Trailer;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class PageTrailerTest extends TestCase
{
    /**
     * @return PageTrailer&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(PageTrailer::class);
    }

    /**
     * @param string[] $methods
     * @return PageTrailer&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(PageTrailer::class, $methods);
    }

    /**
     * @return ReflectionClass<PageTrailer>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(PageTrailer::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 16;

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
    public function testGetTrailer(): void
    {
        $trailer = new Trailer();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $trailerPropertyRef = $targetRef->getProperty('trailer');
        $trailerPropertyRef->setAccessible(true);
        $trailerPropertyRef->setValue($targetMock, $trailer);

        $this->assertEquals($trailer, $targetMock->getTrailer());
    }

    /**
     * @test
     */
    public function testSetTrailer(): void
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
     * @test
     */
    public function testGetPage(): void
    {
        $page = new Page(2);

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
        $page = new Page(2);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setPage($page);

        $targetRef = $this->createTargetReflection();

        $pagePropertyRef = $targetRef->getProperty('page');
        $pagePropertyRef->setAccessible(true);

        $this->assertEquals($page, $pagePropertyRef->getValue($targetMock));
    }
}
