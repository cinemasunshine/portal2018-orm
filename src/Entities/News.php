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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var Title|null
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $title;

    /**
     * @var File|null
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="image_file_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $image;

    /**
     * @var int
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     */
    protected $category;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $headline;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $body;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="start_dt")
     */
    protected $startDt;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="end_dt")
     */
    protected $endDt;

    /**
     * @var Collection<int, PageNews>
     * @ORM\OneToMany(targetEntity="PageNews", mappedBy="news")
     */
    protected $pages;

    /**
     * @var Collection<int, SpecialSiteNews>
     * @ORM\OneToMany(targetEntity="SpecialSiteNews", mappedBy="news")
     */
    protected $specialSites;

    /**
     * @var Collection<int, TheaterNews>
     * @ORM\OneToMany(targetEntity="TheaterNews", mappedBy="news")
     */
    protected $theaters;

    /**
     * construct
     */
    public function __construct()
    {
        $this->pages = new ArrayCollection();
        $this->specialSites = new ArrayCollection();
        $this->theaters = new ArrayCollection();
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
     * @return Title|null
     */
    public function getTitle(): ?Title
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param Title|null $title
     * @return void
     */
    public function setTitle(?Title $title)
    {
        $this->title = $title;
    }

    /**
     * Return image
     *
     * @return File|null
     */
    public function getImage(): ?File
    {
        return $this->image;
    }

    /**
     * Set image
     *
     * @param File|null $image
     * @return void
     */
    public function setImage(?File $image)
    {
        $this->image = $image;
    }

    /**
     * Return category
     *
     * @return integer
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return void
     */
    public function setCategory(int $category)
    {
        $this->category = $category;
    }

    /**
     * Return headline
     *
     * @return string
     */
    public function getHeadline(): string
    {
        return $this->headline;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return void
     */
    public function setHeadline(string $headline)
    {
        $this->headline = $headline;
    }

    /**
     * Return body
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return void
     */
    public function setBody(string $body)
    {
        $this->body = $body;
    }

    /**
     * Return startDt
     *
     * @return \DateTime
     */
    public function getStartDt(): \DateTime
    {
        return $this->startDt;
    }

    /**
     * Set startDt
     *
     * @param \DateTime|string $startDt
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setStartDt($startDt)
    {
        if ($startDt instanceof \DateTime) {
            $this->startDt = $startDt;
        } elseif (is_string($startDt)) {
            $this->startDt = new \DateTime($startDt);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return endDt
     *
     * @return \DateTime
     */
    public function getEndDt(): \DateTime
    {
        return $this->endDt;
    }

    /**
     * Set endDt
     *
     * @param \DateTime|string $endDt
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setEndDt($endDt)
    {
        if ($endDt instanceof \DateTime) {
            $this->endDt = $endDt;
        } elseif (is_string($endDt)) {
            $this->endDt = new \DateTime($endDt);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return pages
     *
     * @return Collection<int, PageNews>
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }

    /**
     * Return specialSites
     *
     * @return Collection<int, SpecialSiteNews>
     */
    public function getSpecialSites(): Collection
    {
        return $this->specialSites;
    }

    /**
     * Return theaters
     *
     * @return Collection<int, TheaterNews>
     */
    public function getTheaters(): Collection
    {
        return $this->theaters;
    }
}
