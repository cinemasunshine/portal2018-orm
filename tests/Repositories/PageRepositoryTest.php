<?php

declare(strict_types=1);

namespace Tests\Repositories;

use Cinemasunshine\ORM\Entities\Page;
use Cinemasunshine\ORM\Repositories\PageRepository;
use Doctrine\ORM\QueryBuilder;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class PageRepositoryTest extends TestCase
{
    /**
     * @return MockObject&PageRepository<Page>
     */
    protected function createTargetMock()
    {
        return $this->createMock(PageRepository::class);
    }

    /**
     * @param string[] $methods
     * @return MockObject&PageRepository<Page>
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(PageRepository::class, $methods);
    }

    /**
     * @return ReflectionClass<PageRepository>
     */
    protected function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(PageRepository::class);
    }

    /**
     * @return MockObject&QueryBuilder
     */
    protected function createQueryBuilderMock()
    {
        return $this->createMock(QueryBuilder::class);
    }

    /**
     * @test
     */
    public function testAddActiveQuery(): void
    {
        $alias = 'test';

        $queryBuilderMock = $this->createQueryBuilderMock();
        $queryBuilderMock
            ->expects($this->once())
            ->method('andWhere')
            ->with($this->equalTo($alias . '.isDeleted = false'))
            ->willReturn($queryBuilderMock);

        $targetRef = $this->createTargetReflection();

        $addActiveQueryRef = $targetRef->getMethod('addActiveQuery');
        $addActiveQueryRef->setAccessible(true);

        $targetMock = $this->createTargetMock();
        $addActiveQueryRef->invoke($targetMock, $queryBuilderMock, $alias);
    }
}
