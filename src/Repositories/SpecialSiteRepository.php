<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Repositories;

use Cinemasunshine\ORM\Entities\SpecialSite;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * @template TSpecialSiteEntity of SpecialSite
 * @extends EntityRepository<TSpecialSiteEntity>
 */
class SpecialSiteRepository extends EntityRepository
{
    protected function addActiveQuery(QueryBuilder $qb, string $alias): void
    {
        $qb->andWhere(sprintf('%s.isDeleted = false', $alias));
    }
}
