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
 * Campaign entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="campaign", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Campaign
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
     * @ORM\ManyToOne(targetEntity="Title", inversedBy="campaigns")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Title|null
     */
    protected $title;

    /**
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="image_file_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     *
     * @var File
     */
    protected $image;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $name;

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
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $url;

    /**
     * @ORM\OneToMany(targetEntity="PageCampaign", mappedBy="campaign")
     *
     * @var Collection<int, PageCampaign>
     */
    protected $pages;

    /**
     * @ORM\OneToMany(targetEntity="SpecialSiteCampaign", mappedBy="campaign")
     *
     * @var Collection<int, SpecialSiteCampaign>
     */
    protected $specialSites;

    /**
     * @ORM\OneToMany(targetEntity="TheaterCampaign", mappedBy="campaign")
     *
     * @var Collection<int, TheaterCampaign>
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

    public function getImage(): File
    {
        return $this->image;
    }

    public function setImage(File $image): void
    {
        $this->image = $image;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return Collection<int, PageCampaign>
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }

    /**
     * @return Collection<int, SpecialSiteCampaign>
     */
    public function getSpecialSite(): Collection
    {
        return $this->specialSites;
    }

    /**
     * @return Collection<int, TheaterCampaign>
     */
    public function getTheaters(): Collection
    {
        return $this->theaters;
    }
}
