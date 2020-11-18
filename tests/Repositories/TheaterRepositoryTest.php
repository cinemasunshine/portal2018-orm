<?php

declare(strict_types=1);

namespace Tests\Repositories;

use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Repositories\TheaterRepository;
use Doctrine\ORM\QueryBuilder;
use PHPUnit\Framework\TestCase;

final class TheaterRepositoryTest extends TestCase
{
    /**
     * @return \PHPUnit\Framework\MockObject\MockObject&TheaterRepository<Theater>
     */
    protected function createTargetMock()
    {
        return $this->createMock(TheaterRepository::class);
    }

    /**
     * @param string[] $methods
     * @return \PHPUnit\Framework\MockObject\MockObject&TheaterRepository<Theater>
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterRepository::class, $methods);
    }

    /**
     * @return \ReflectionClass<TheaterRepository>
     */
    protected function createTargetReflection()
    {
        return new \ReflectionClass(TheaterRepository::class);
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject&QueryBuilder
     */
    protected function createQueryBuilderMock()
    {
        return $this->createMock(QueryBuilder::class);
    }

    /**
     * @test
     * @return void
     */
    public function testAddActiveQuery()
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
