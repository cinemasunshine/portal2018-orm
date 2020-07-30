<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SavedUserTrait;
use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var Title
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     */
    protected $title;

    /**
     * @var \DateTime
     * @ORM\Column(type="date", name="start_date")
     */
    protected $startDate;

    /**
     * @var \DateTime
     * @ORM\Column(type="date", name="end_date")
     */
    protected $endDate;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="public_start_dt")
     */
    protected $publicStartDt;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="public_end_dt")
     */
    protected $publicEndDt;

    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=true)
     */
    protected $remark;

    /**
     * @var Collection<int, ShowingFormat>
     * @ORM\OneToMany(targetEntity="ShowingFormat", mappedBy="schedule", orphanRemoval=true)
     */
    protected $showingFormats;

    /**
     * @var Collection<int, ShowingTheater>
     * @ORM\OneToMany(targetEntity="ShowingTheater", mappedBy="schedule", orphanRemoval=true)
     */
    protected $showingTheaters;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->showingFormats = new ArrayCollection();
        $this->showingTheaters = new ArrayCollection();
    }

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
     * Return title
     *
     * @return Title
     */
    public function getTitle(): Title
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param Title $title
     * @return void
     */
    public function setTitle(Title $title)
    {
        $this->title = $title;
    }

    /**
     * Return startDate
     *
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * Set startDate
     *
     * @param \DateTime|string $startDate
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setStartDate($startDate)
    {
        if ($startDate instanceof \DateTime) {
            $this->startDate = $startDate;
        } elseif (is_string($startDate)) {
            $this->startDate = new \DateTime($startDate);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return endDate
     *
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime|string $endDate
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setEndDate($endDate)
    {
        if ($endDate instanceof \DateTime) {
            $this->endDate = $endDate;
        } elseif (is_string($endDate)) {
            $this->endDate = new \DateTime($endDate);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return publicStartDt
     *
     * @return \DateTime
     */
    public function getPublicStartDt(): \DateTime
    {
        return $this->publicStartDt;
    }

    /**
     * Set publicStartDt
     *
     * @param \DateTime|string $publicStartDt
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setPublicStartDt($publicStartDt)
    {
        if ($publicStartDt instanceof \DateTime) {
            $this->publicStartDt = $publicStartDt;
        } elseif (is_string($publicStartDt)) {
            $this->publicStartDt = new \DateTime($publicStartDt);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return publicEndDt
     *
     * @return \DateTime
     */
    public function getPublicEndDt(): \DateTime
    {
        return $this->publicEndDt;
    }

    /**
     * Set publicEndDt
     *
     * @param \DateTime|string $publicEndDt
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setPublicEndDt($publicEndDt)
    {
        if ($publicEndDt instanceof \DateTime) {
            $this->publicEndDt = $publicEndDt;
        } elseif (is_string($publicEndDt)) {
            $this->publicEndDt = new \DateTime($publicEndDt);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return remark
     *
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * Set remark
     *
     * @param string|null $remark
     * @return void
     */
    public function setRemark(?string $remark)
    {
        $this->remark = $remark;
    }

    /**
     * Return showingFormats
     *
     * @return Collection<int, ShowingFormat>
     */
    public function getShowingFormats(): Collection
    {
        return $this->showingFormats;
    }

    /**
     * Set showingFormats
     *
     * @param Collection<int, ShowingFormat> $showingFormats
     * @return void
     */
    public function setShowingFormats(Collection $showingFormats)
    {
        $this->showingFormats = $showingFormats;
    }

    /**
     * Return showingTheaters
     *
     * @return Collection<int, ShowingTheater>
     */
    public function getShowingTheaters(): Collection
    {
        return $this->showingTheaters;
    }

    /**
     * Undocumented function
     *
     * @param Collection<int, ShowingTheater> $showingTheaters
     * @return void
     */
    public function setShowingTheaters(Collection $showingTheaters)
    {
        $this->showingTheaters = $showingTheaters;
    }
}
