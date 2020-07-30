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
 * Trailer entity
 *
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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var Title|null
     * @ORM\ManyToOne(targetEntity="Title", inversedBy="trailers")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $title;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $youtube;

    /**
     * @var File
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="banner_image_file_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     */
    protected $bannerImage;

    /**
     * @var string
     * @ORM\Column(type="string", name="banner_link_url")
     */
    protected $bannerLinkUrl;

    /**
     * @var Collection<int, PageTrailer>
     * @ORM\OneToMany(targetEntity="PageTrailer", mappedBy="trailer", orphanRemoval=true)
     */
    protected $pageTrailers;

    /**
     * @var Collection<int, SpecialSiteTrailer>
     * @ORM\OneToMany(targetEntity="SpecialSiteTrailer", mappedBy="trailer", orphanRemoval=true)
     */
    protected $specialSiteTrailers;

    /**
     * @var Collection<int, TheaterTrailer>
     * @ORM\OneToMany(targetEntity="TheaterTrailer", mappedBy="trailer", orphanRemoval=true)
     */
    protected $theaterTrailers;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->pageTrailers = new ArrayCollection();
        $this->specialSiteTrailers = new ArrayCollection();
        $this->theaterTrailers = new ArrayCollection();
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
     * Return name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Return youtube
     *
     * @return string
     */
    public function getYoutube(): string
    {
        return $this->youtube;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     * @return void
     */
    public function setYoutube(string $youtube)
    {
        $this->youtube = $youtube;
    }

    /**
     * Return bannerImage
     *
     * @return File
     */
    public function getBannerImage(): File
    {
        return $this->bannerImage;
    }

    /**
     * Set bannerImage
     *
     * @param File $bannerImage
     * @return void
     */
    public function setBannerImage(File $bannerImage)
    {
        $this->bannerImage = $bannerImage;
    }

    /**
     * Return bannerLinkUrl
     *
     * @return string
     */
    public function getBannerLinkUrl(): string
    {
        return $this->bannerLinkUrl;
    }

    /**
     * set bannerLinkUrl
     *
     * @param string $bannerLinkUrl
     * @return void
     */
    public function setBannerLinkUrl(string $bannerLinkUrl)
    {
        $this->bannerLinkUrl = $bannerLinkUrl;
    }

    /**
     * Return pageTrailers
     *
     * @return Collection<int, PageTrailer>
     */
    public function getPageTrailers(): Collection
    {
        return $this->pageTrailers;
    }

    /**
     * Set pageTrailers
     *
     * @param Collection<int, PageTrailer> $pageTrailers
     * @return void
     */
    public function setPageTrailers(Collection $pageTrailers)
    {
        $this->pageTrailers = $pageTrailers;
    }

    /**
     * Return specialSiteTrailers
     *
     * @return Collection<int, SpecialSiteTrailer>
     */
    public function getSpecialSiteTrailers(): Collection
    {
        return $this->specialSiteTrailers;
    }

    /**
     * Set specialSiteTrailers
     *
     * @param Collection<int, SpecialSiteTrailer> $specialSiteTrailers
     * @return void
     */
    public function setSpecialSiteTrailers(Collection $specialSiteTrailers)
    {
        $this->specialSiteTrailers = $specialSiteTrailers;
    }

    /**
     * Return theaterTrailers
     *
     * @return Collection<int, TheaterTrailer>
     */
    public function getTheaterTrailers(): Collection
    {
        return $this->theaterTrailers;
    }

    /**
     * Set theaterTrailers
     *
     * @param Collection<int, TheaterTrailer> $theaterTrailers
     * @return void
     */
    public function setTheaterTrailers(Collection $theaterTrailers)
    {
        $this->theaterTrailers = $theaterTrailers;
    }
}
