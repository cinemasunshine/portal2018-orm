<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Repositories;

use Cinemasunshine\ORM\Entities\Schedule;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * @template TScheduleEntity of Schedule
 * @extends EntityRepository<TScheduleEntity>
 */
class ScheduleRepository extends EntityRepository
{
    protected function addActiveQuery(QueryBuilder $qb, string $alias): void
    {
        $qb->andWhere(sprintf('%s.isDeleted = false', $alias));
    }

    protected function addPublicQuery(QueryBuilder $qb, string $alias): void
    {
        $this->addActiveQuery($qb, $alias);

        $qb
            ->andWhere(sprintf('%s.publicStartDt <= CURRENT_TIMESTAMP()', $alias))
            ->andWhere(sprintf('%s.publicEndDt > CURRENT_TIMESTAMP()', $alias));
    }

    protected function addNowShowingQuery(QueryBuilder $qb, string $alias): void
    {
        $this->addPublicQuery($qb, $alias);

        $qb
            ->andWhere(sprintf('%s.startDate <= CURRENT_DATE()', $alias))
            ->orderBy(sprintf('%s.startDate', $alias), 'DESC');
    }

    protected function addComingSoonQuery(QueryBuilder $qb, string $alias): void
    {
        $this->addPublicQuery($qb, $alias);

        $qb
            ->andWhere(sprintf('%s.startDate > CURRENT_DATE()', $alias))
            ->orderBy(sprintf('%s.startDate', $alias), 'ASC');
    }
}
