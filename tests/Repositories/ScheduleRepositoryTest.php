<?php

declare(strict_types=1);

namespace Tests\Repositories;

use Cinemasunshine\ORM\Entities\Schedule;
use Cinemasunshine\ORM\Repositories\ScheduleRepository;
use Doctrine\ORM\QueryBuilder;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class ScheduleRepositoryTest extends TestCase
{
    /**
     * @return MockObject&ScheduleRepository<Schedule>
     */
    protected function createTargetMock()
    {
        return $this->createMock(ScheduleRepository::class);
    }

    /**
     * @param string[] $methods
     * @return MockObject&ScheduleRepository<Schedule>
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(ScheduleRepository::class, $methods);
    }

    /**
     * @return ReflectionClass<ScheduleRepository>
     */
    protected function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(ScheduleRepository::class);
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

    /**
     * @test
     */
    public function testAddPublicQuery(): void
    {
        $alias = 'test';

        $queryBuilderMock = $this->createQueryBuilderMock();
        $queryBuilderMock
            ->expects($this->exactly(2))
            ->method('andWhere')
            ->withConsecutive(
                [$this->equalTo($alias . '.publicStartDt <= CURRENT_TIMESTAMP()')],
                [$this->equalTo($alias . '.publicEndDt > CURRENT_TIMESTAMP()')]
            )
            ->willReturn($queryBuilderMock);

        $targetMock = $this->createTargetPartialMock(['addActiveQuery']);
        $targetMock
            ->method('addActiveQuery')
            ->with($this->equalTo($queryBuilderMock), $this->equalTo($alias));

        $targetRef = $this->createTargetReflection();

        $addPublicQueryRef = $targetRef->getMethod('addPublicQuery');
        $addPublicQueryRef->setAccessible(true);

        $addPublicQueryRef->invoke($targetMock, $queryBuilderMock, $alias);
    }

    /**
     * @test
     */
    public function testAddNowShowingQuery(): void
    {
        $alias = 'test';

        $queryBuilderMock = $this->createQueryBuilderMock();
        $queryBuilderMock
            ->expects($this->once())
            ->method('andWhere')
            ->with($this->equalTo($alias . '.startDate <= CURRENT_DATE()'))
            ->willReturn($queryBuilderMock);
        $queryBuilderMock
            ->expects($this->once())
            ->method('orderBy')
            ->with($this->equalTo($alias . '.startDate'), 'DESC')
            ->willReturn($queryBuilderMock);

        $targetMock = $this->createTargetPartialMock(['addPublicQuery']);
        $targetMock
            ->method('addPublicQuery')
            ->with($this->equalTo($queryBuilderMock), $this->equalTo($alias));

        $targetRef = $this->createTargetReflection();

        $addNowShowingQueryRef = $targetRef->getMethod('addNowShowingQuery');
        $addNowShowingQueryRef->setAccessible(true);

        $addNowShowingQueryRef->invoke($targetMock, $queryBuilderMock, $alias);
    }

    /**
     * @test
     */
    public function testAddComingSoonQuery(): void
    {
        $alias = 'test';

        $queryBuilderMock = $this->createQueryBuilderMock();
        $queryBuilderMock
            ->expects($this->once())
            ->method('andWhere')
            ->with($this->equalTo($alias . '.startDate > CURRENT_DATE()'))
            ->willReturn($queryBuilderMock);
        $queryBuilderMock
            ->expects($this->once())
            ->method('orderBy')
            ->with($this->equalTo($alias . '.startDate'), 'ASC')
            ->willReturn($queryBuilderMock);

        $targetMock = $this->createTargetPartialMock(['addPublicQuery']);
        $targetMock
            ->method('addPublicQuery')
            ->with($this->equalTo($queryBuilderMock), $this->equalTo($alias));

        $targetRef = $this->createTargetReflection();

        $addComingSoonQueryRef = $targetRef->getMethod('addComingSoonQuery');
        $addComingSoonQueryRef->setAccessible(true);

        $addComingSoonQueryRef->invoke($targetMock, $queryBuilderMock, $alias);
    }
}
