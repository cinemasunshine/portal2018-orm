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
 * @ORM\MappedSuperclass
 * @ORM\Table(name="trailer", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Trailer
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
     * @ORM\ManyToOne(targetEntity="Title", inversedBy="trailers")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Title|null
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $youtube;

    /**
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="banner_image_file_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     *
     * @var File
     */
    protected $bannerImage;

    /**
     * @ORM\Column(type="string", name="banner_link_url")
     *
     * @var string
     */
    protected $bannerLinkUrl;

    /**
     * @ORM\OneToMany(targetEntity="PageTrailer", mappedBy="trailer", orphanRemoval=true)
     *
     * @var Collection<int, PageTrailer>
     */
    protected $pageTrailers;

    /**
     * @ORM\OneToMany(targetEntity="SpecialSiteTrailer", mappedBy="trailer", orphanRemoval=true)
     *
     * @var Collection<int, SpecialSiteTrailer>
     */
    protected $specialSiteTrailers;

    /**
     * @ORM\OneToMany(targetEntity="TheaterTrailer", mappedBy="trailer", orphanRemoval=true)
     *
     * @var Collection<int, TheaterTrailer>
     */
    protected $theaterTrailers;

    public function __construct()
    {
        $this->pageTrailers        = new ArrayCollection();
        $this->specialSiteTrailers = new ArrayCollection();
        $this->theaterTrailers     = new ArrayCollection();
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getYoutube(): string
    {
        return $this->youtube;
    }

    public function setYoutube(string $youtube): void
    {
        $this->youtube = $youtube;
    }

    public function getBannerImage(): File
    {
        return $this->bannerImage;
    }

    public function setBannerImage(File $bannerImage): void
    {
        $this->bannerImage = $bannerImage;
    }

    public function getBannerLinkUrl(): string
    {
        return $this->bannerLinkUrl;
    }

    public function setBannerLinkUrl(string $bannerLinkUrl): void
    {
        $this->bannerLinkUrl = $bannerLinkUrl;
    }

    /**
     * @return Collection<int, PageTrailer>
     */
    public function getPageTrailers(): Collection
    {
        return $this->pageTrailers;
    }

    /**
     * @param Collection<int, PageTrailer> $pageTrailers
     */
    public function setPageTrailers(Collection $pageTrailers): void
    {
        $this->pageTrailers = $pageTrailers;
    }

    /**
     * @return Collection<int, SpecialSiteTrailer>
     */
    public function getSpecialSiteTrailers(): Collection
    {
        return $this->specialSiteTrailers;
    }

    /**
     * @param Collection<int, SpecialSiteTrailer> $specialSiteTrailers
     */
    public function setSpecialSiteTrailers(Collection $specialSiteTrailers): void
    {
        $this->specialSiteTrailers = $specialSiteTrailers;
    }

    /**
     * @return Collection<int, TheaterTrailer>
     */
    public function getTheaterTrailers(): Collection
    {
        return $this->theaterTrailers;
    }

    /**
     * @param Collection<int, TheaterTrailer> $theaterTrailers
     */
    public function setTheaterTrailers(Collection $theaterTrailers): void
    {
        $this->theaterTrailers = $theaterTrailers;
    }
}
