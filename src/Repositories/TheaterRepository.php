<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Repositories;

use Cinemasunshine\ORM\Entities\Theater;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * @template TTheaterEntity of Theater
 * @extends EntityRepository<TTheaterEntity>
 */
class TheaterRepository extends EntityRepository
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
}
