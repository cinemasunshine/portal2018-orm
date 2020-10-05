<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Repositories;

use Cinemasunshine\ORM\Entities\Schedule;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends EntityRepository<Schedule>
 */
class ScheduleRepository extends EntityRepository
{
    /**
     * @param QueryBuilder $qb
     * @param string       $alias
     * @return void
     */
    protected function addActiveQuery(QueryBuilder $qb, string $alias)
    {
        $qb->andWhere(sprintf('%s.isDeleted = false', $alias));
    }

    /**
     * @param QueryBuilder $qb
     * @param string       $alias
     * @return void
     */
    protected function addPublicQuery(QueryBuilder $qb, string $alias)
    {
        $this->addActiveQuery($qb, $alias);

        $qb
            ->andWhere(sprintf('%s.publicStartDt <= CURRENT_TIMESTAMP()', $alias))
            ->andWhere(sprintf('%s.publicEndDt > CURRENT_TIMESTAMP()', $alias));
    }

    /**
     * @param QueryBuilder $qb
     * @param string       $alias
     * @return void
     */
    protected function addNowShowingQuery(QueryBuilder $qb, string $alias)
    {
        $this->addPublicQuery($qb, $alias);

        $qb
            ->andWhere(sprintf('%s.startDate <= CURRENT_DATE()', $alias))
            ->orderBy(sprintf('%s.startDate', $alias), 'DESC');
    }

    /**
     * @param QueryBuilder $qb
     * @param string       $alias
     * @return void
     */
    protected function addComingSoonQuery(QueryBuilder $qb, string $alias)
    {
        $this->addPublicQuery($qb, $alias);

        $qb
            ->andWhere(sprintf('%s.startDate > CURRENT_DATE()', $alias))
            ->orderBy(sprintf('%s.startDate', $alias), 'ASC');
    }
}
