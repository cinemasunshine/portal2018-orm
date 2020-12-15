<?php

declare(strict_types=1);

namespace Tests\Repositories;

use Cinemasunshine\ORM\Entities\Schedule;
use Cinemasunshine\ORM\Repositories\ScheduleRepository;
use Doctrine\ORM\QueryBuilder;
use PHPUnit\Framework\TestCase;

final class ScheduleRepositoryTest extends TestCase
{
    /**
     * @return \PHPUnit\Framework\MockObject\MockObject&ScheduleRepository<Schedule>
     */
    protected function createTargetMock()
    {
        return $this->createMock(ScheduleRepository::class);
    }

    /**
     * @param string[] $methods
     * @return \PHPUnit\Framework\MockObject\MockObject&ScheduleRepository<Schedule>
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(ScheduleRepository::class, $methods);
    }

    /**
     * @return \ReflectionClass<ScheduleRepository>
     */
    protected function createTargetReflection()
    {
        return new \ReflectionClass(ScheduleRepository::class);
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
     *
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

    /**
     * @test
     *
     * @return void
     */
    public function testAddPublicQuery()
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
     *
     * @return void
     */
    public function testAddNowShowingQuery()
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
     *
     * @return void
     */
    public function testAddComingSoonQuery()
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
