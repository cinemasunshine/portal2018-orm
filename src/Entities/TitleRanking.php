<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use InvalidArgumentException;

/**
 * TitleRanking entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="title_ranking", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class TitleRanking
{
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="date", name="from_date", nullable=true)
     *
     * @var DateTime|null
     */
    protected $fromDate;

    /**
     * @ORM\Column(type="date", name="to_date", nullable=true)
     *
     * @var DateTime|null
     */
    protected $toDate;

    /**
     * @ORM\OneToMany(targetEntity="TitleRankingRank", mappedBy="ranking", indexBy="id")
     *
     * @var Collection<int, TitleRankingRank>
     */
    protected $ranks;

    public function __construct()
    {
        $this->ranks = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFromDate(): ?DateTime
    {
        return $this->fromDate;
    }

    /**
     * @param DateTime|string|null $fromDate
     */
    public function setFromDate($fromDate): void
    {
        if (is_null($fromDate) || $fromDate instanceof DateTime) {
            $this->fromDate = $fromDate;
        } elseif (is_string($fromDate)) {
            $this->fromDate = new DateTime($fromDate);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getToDate(): ?DateTime
    {
        return $this->toDate;
    }

    /**
     * @param DateTime|string|null $toDate
     */
    public function setToDate($toDate): void
    {
        if (is_null($toDate) || $toDate instanceof DateTime) {
            $this->toDate = $toDate;
        } elseif (is_string($toDate)) {
            $this->toDate = new DateTime($toDate);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * @return Collection<int, TitleRankingRank>
     */
    public function getRanks(): Collection
    {
        return $this->ranks;
    }
}
