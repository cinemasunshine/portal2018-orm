<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Repositories;

use Cinemasunshine\ORM\Entities\Page;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * @template TPageEntity of Page
 * @extends EntityRepository<TPageEntity>
 */
class PageRepository extends EntityRepository
{
    protected function addActiveQuery(QueryBuilder $qb, string $alias): void
    {
        $qb->andWhere(sprintf('%s.isDeleted = false', $alias));
    }
}
