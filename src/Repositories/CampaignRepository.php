<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Repositories;

use Cinemasunshine\ORM\Entities\Campaign;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * @template TCampaignEntity of Campaign
 * @extends EntityRepository<TCampaignEntity>
 */
class CampaignRepository extends EntityRepository
{
    protected function addActiveQuery(QueryBuilder $qb, string $alias): void
    {
        $qb->andWhere(sprintf('%s.isDeleted = false', $alias));
    }
}
