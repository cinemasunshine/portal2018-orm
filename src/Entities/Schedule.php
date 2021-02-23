<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SavedUserTrait;
use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use InvalidArgumentException;

/**
 * Schedule entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="schedule", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Schedule
{
    use SavedUserTrait;
    use SoftDeleteTrait;
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     *
     * @var Title
     */
    protected $title;

    /**
     * @ORM\Column(type="date", name="start_date")
     *
     * @var DateTime
     */
    protected $startDate;

    /**
     * @ORM\Column(type="date", name="end_date")
     *
     * @var DateTime
     */
    protected $endDate;

    /**
     * @ORM\Column(type="datetime", name="public_start_dt")
     *
     * @var DateTime
     */
    protected $publicStartDt;

    /**
     * @ORM\Column(type="datetime", name="public_end_dt")
     *
     * @var DateTime
     */
    protected $publicEndDt;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var string|null
     */
    protected $remark;

    /**
     * @ORM\OneToMany(targetEntity="ShowingFormat", mappedBy="schedule", orphanRemoval=true)
     *
     * @var Collection<int, ShowingFormat>
     */
    protected $showingFormats;

    /**
     * @ORM\OneToMany(targetEntity="ShowingTheater", mappedBy="schedule", orphanRemoval=true)
     *
     * @var Collection<int, ShowingTheater>
     */
    protected $showingTheaters;

    public function __construct()
    {
        $this->showingFormats  = new ArrayCollection();
        $this->showingTheaters = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): Title
    {
        return $this->title;
    }

    public function setTitle(Title $title): void
    {
        $this->title = $title;
    }

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime|string $startDate
     *
     * @throws InvalidArgumentException
     */
    public function setStartDate($startDate): void
    {
        if ($startDate instanceof DateTime) {
            $this->startDate = $startDate;
        } elseif (is_string($startDate)) {
            $this->startDate = new DateTime($startDate);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * @param DateTime|string $endDate
     *
     * @throws InvalidArgumentException
     */
    public function setEndDate($endDate): void
    {
        if ($endDate instanceof DateTime) {
            $this->endDate = $endDate;
        } elseif (is_string($endDate)) {
            $this->endDate = new DateTime($endDate);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getPublicStartDt(): DateTime
    {
        return $this->publicStartDt;
    }

    /**
     * @param DateTime|string $publicStartDt
     *
     * @throws InvalidArgumentException
     */
    public function setPublicStartDt($publicStartDt): void
    {
        if ($publicStartDt instanceof DateTime) {
            $this->publicStartDt = $publicStartDt;
        } elseif (is_string($publicStartDt)) {
            $this->publicStartDt = new DateTime($publicStartDt);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getPublicEndDt(): DateTime
    {
        return $this->publicEndDt;
    }

    /**
     * @param DateTime|string $publicEndDt
     *
     * @throws InvalidArgumentException
     */
    public function setPublicEndDt($publicEndDt): void
    {
        if ($publicEndDt instanceof DateTime) {
            $this->publicEndDt = $publicEndDt;
        } elseif (is_string($publicEndDt)) {
            $this->publicEndDt = new DateTime($publicEndDt);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return Collection<int, ShowingFormat>
     */
    public function getShowingFormats(): Collection
    {
        return $this->showingFormats;
    }

    /**
     * @param Collection<int, ShowingFormat> $showingFormats
     */
    public function setShowingFormats(Collection $showingFormats): void
    {
        $this->showingFormats = $showingFormats;
    }

    /**
     * @return Collection<int, ShowingTheater>
     */
    public function getShowingTheaters(): Collection
    {
        return $this->showingTheaters;
    }

    /**
     * @param Collection<int, ShowingTheater> $showingTheaters
     */
    public function setShowingTheaters(Collection $showingTheaters): void
    {
        $this->showingTheaters = $showingTheaters;
    }
}
