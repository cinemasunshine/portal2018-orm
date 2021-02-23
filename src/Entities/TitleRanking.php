<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use DateTime;
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
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank1_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Title|null
     */
    protected $rank1Title;

    /**
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank2_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Title|null
     */
    protected $rank2Title;

    /**
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank3_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Title|null
     */
    protected $rank3Title;

    /**
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank4_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Title|null
     */
    protected $rank4Title;

    /**
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank5_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Title|null
     */
    protected $rank5Title;

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

    public function getRank1Title(): ?Title
    {
        return $this->rank1Title;
    }

    public function setRank1Title(?Title $rank1Title): void
    {
        $this->rank1Title = $rank1Title;
    }

    public function getRank2Title(): ?Title
    {
        return $this->rank2Title;
    }

    public function setRank2Title(?Title $rank2Title): void
    {
        $this->rank2Title = $rank2Title;
    }

    public function getRank3Title(): ?Title
    {
        return $this->rank3Title;
    }

    public function setRank3Title(?Title $rank3Title): void
    {
        $this->rank3Title = $rank3Title;
    }

    public function getRank4Title(): ?Title
    {
        return $this->rank4Title;
    }

    public function setRank4Title(?Title $rank4Title): void
    {
        $this->rank4Title = $rank4Title;
    }

    public function getRank5Title(): ?Title
    {
        return $this->rank5Title;
    }

    public function setRank5Title(?Title $rank5Title): void
    {
        $this->rank5Title = $rank5Title;
    }
}
