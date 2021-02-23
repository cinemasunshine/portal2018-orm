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
 * News entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="news", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class News
{
    use SavedUserTrait;
    use SoftDeleteTrait;
    use TimestampableTrait;

    public const CATEGORY_NEWS       = 1;
    public const CATEGORY_INFO       = 2;
    public const CATEGORY_IMAX       = 3;
    public const CATEGORY_4DX        = 4;
    public const CATEGORY_EVENT      = 5;
    public const CATEGORY_SCREENX    = 6; // SASAKI-351
    public const CATEGORY_4DX_SCREEN = 7; // SASAKI-432、SASAKI-525

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
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Title|null
     */
    protected $title;

    /**
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="image_file_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var File|null
     */
    protected $image;

    /**
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     *
     * @var int
     */
    protected $category;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $headline;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    protected $body;

    /**
     * @ORM\Column(type="datetime", name="start_dt")
     *
     * @var DateTime
     */
    protected $startDt;

    /**
     * @ORM\Column(type="datetime", name="end_dt")
     *
     * @var DateTime
     */
    protected $endDt;

    /**
     * @ORM\OneToMany(targetEntity="PageNews", mappedBy="news")
     *
     * @var Collection<int, PageNews>
     */
    protected $pages;

    /**
     * @ORM\OneToMany(targetEntity="SpecialSiteNews", mappedBy="news")
     *
     * @var Collection<int, SpecialSiteNews>
     */
    protected $specialSites;

    /**
     * @ORM\OneToMany(targetEntity="TheaterNews", mappedBy="news")
     *
     * @var Collection<int, TheaterNews>
     */
    protected $theaters;

    public function __construct()
    {
        $this->pages        = new ArrayCollection();
        $this->specialSites = new ArrayCollection();
        $this->theaters     = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): ?Title
    {
        return $this->title;
    }

    public function setTitle(?Title $title): void
    {
        $this->title = $title;
    }

    public function getImage(): ?File
    {
        return $this->image;
    }

    public function setImage(?File $image): void
    {
        $this->image = $image;
    }

    public function getCategory(): int
    {
        return $this->category;
    }

    public function setCategory(int $category): void
    {
        $this->category = $category;
    }

    public function getHeadline(): string
    {
        return $this->headline;
    }

    public function setHeadline(string $headline): void
    {
        $this->headline = $headline;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    public function getStartDt(): DateTime
    {
        return $this->startDt;
    }

    /**
     * @param DateTime|string $startDt
     *
     * @throws InvalidArgumentException
     */
    public function setStartDt($startDt): void
    {
        if ($startDt instanceof DateTime) {
            $this->startDt = $startDt;
        } elseif (is_string($startDt)) {
            $this->startDt = new DateTime($startDt);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getEndDt(): DateTime
    {
        return $this->endDt;
    }

    /**
     * @param DateTime|string $endDt
     *
     * @throws InvalidArgumentException
     */
    public function setEndDt($endDt): void
    {
        if ($endDt instanceof DateTime) {
            $this->endDt = $endDt;
        } elseif (is_string($endDt)) {
            $this->endDt = new DateTime($endDt);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * @return Collection<int, PageNews>
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }

    /**
     * @return Collection<int, SpecialSiteNews>
     */
    public function getSpecialSites(): Collection
    {
        return $this->specialSites;
    }

    /**
     * @return Collection<int, TheaterNews>
     */
    public function getTheaters(): Collection
    {
        return $this->theaters;
    }
}
