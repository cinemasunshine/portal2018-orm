<?php

declare(strict_types=1);

namespace Tests\Repositories;

use Cinemasunshine\ORM\Entities\Campaign;
use Cinemasunshine\ORM\Repositories\CampaignRepository;
use Doctrine\ORM\QueryBuilder;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class CampaignRepositoryTest extends TestCase
{
    /**
     * @return MockObject&CampaignRepository<Campaign>
     */
    protected function createTargetMock()
    {
        return $this->createMock(CampaignRepository::class);
    }

    /**
     * @return ReflectionClass<CampaignRepository>
     */
    protected function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(CampaignRepository::class);
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
