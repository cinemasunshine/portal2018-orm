<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="date", name="from_date", nullable=true)
     */
    protected $fromDate;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="date", name="to_date", nullable=true)
     */
    protected $toDate;

    /**
     * @var Title|null
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank1_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $rank1Title;

    /**
     * @var Title|null
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank2_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $rank2Title;

    /**
     * @var Title|null
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank3_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $rank3Title;

    /**
     * @var Title|null
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank4_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $rank4Title;

    /**
     * @var Title|null
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="rank5_title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $rank5Title;

    /**
     * Return id
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Return fromDate
     *
     * @return \DateTime|null
     */
    public function getFromDate(): ?\DateTime
    {
        return $this->fromDate;
    }

    /**
     * Set fromDate
     *
     * @param \DateTime|string|null $fromDate
     * @return void
     */
    public function setFromDate($fromDate)
    {
        if (is_null($fromDate) || $fromDate instanceof \DateTime) {
            $this->fromDate = $fromDate;
        } elseif (is_string($fromDate)) {
            $this->fromDate = new \DateTime($fromDate);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return toDate
     *
     * @return \DateTime|null
     */
    public function getToDate(): ?\DateTime
    {
        return $this->toDate;
    }

    /**
     * Set toDate
     *
     * @param \DateTime|string|null $toDate
     * @return void
     */
    public function setToDate($toDate)
    {
        if (is_null($toDate) || $toDate instanceof \DateTime) {
            $this->toDate = $toDate;
        } elseif (is_string($toDate)) {
            $this->toDate = new \DateTime($toDate);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return rank1Title
     *
     * @return Title|null
     */
    public function getRank1Title(): ?Title
    {
        return $this->rank1Title;
    }

    /**
     * Set rank1Title
     *
     * @param Title|null $rank1Title
     * @return void
     */
    public function setRank1Title(?Title $rank1Title)
    {
        $this->rank1Title = $rank1Title;
    }

    /**
     * Return rank2Title
     *
     * @return Title|null
     */
    public function getRank2Title(): ?Title
    {
        return $this->rank2Title;
    }

    /**
     * Set rank2Title
     *
     * @param Title|null $rank2Title
     * @return void
     */
    public function setRank2Title(?Title $rank2Title)
    {
        $this->rank2Title = $rank2Title;
    }

    /**
     * Return rank3Title
     *
     * @return Title|null
     */
    public function getRank3Title(): ?Title
    {
        return $this->rank3Title;
    }

    /**
     * Set rank3Title
     *
     * @param Title|null $rank3Title
     * @return void
     */
    public function setRank3Title(?Title $rank3Title)
    {
        $this->rank3Title = $rank3Title;
    }

    /**
     * Return rank4Title
     *
     * @return Title|null
     */
    public function getRank4Title(): ?Title
    {
        return $this->rank4Title;
    }

    /**
     * Set rank4Title
     *
     * @param Title|null $rank4Title
     * @return void
     */
    public function setRank4Title(?Title $rank4Title)
    {
        $this->rank4Title = $rank4Title;
    }

    /**
     * Return rank5Title
     *
     * @return Title|null
     */
    public function getRank5Title(): ?Title
    {
        return $this->rank5Title;
    }

    /**
     * Set rank5Title
     *
     * @param Title|null $rank5Title
     * @return void
     */
    public function setRank5Title(?Title $rank5Title)
    {
        $this->rank5Title = $rank5Title;
    }
}
