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
 * MainBanner entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="main_banner", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class MainBanner
{
    use SavedUserTrait;
    use SoftDeleteTrait;
    use TimestampableTrait;

    public const LINK_TYPE_NONE = 1;
    public const LINK_TYPE_URL  = 2;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

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
     * @ORM\Column(type="smallint", name="link_type", options={"unsigned"=true})
     *
     * @var int
     */
    protected $linkType;

    /**
     * @ORM\Column(type="string", name="link_url", nullable=true)
     *
     * @var string|null
     */
    protected $linkUrl;

    /**
     * @ORM\OneToMany(targetEntity="PageMainBanner", mappedBy="mainBanner")
     *
     * @var Collection<int, PageMainBanner>
     */
    protected $pages;

    /**
     * @ORM\OneToMany(targetEntity="SpecialSiteMainBanner", mappedBy="mainBanner")
     *
     * @var Collection<int, SpecialSiteMainBanner>
     */
    protected $specialSites;

    /**
     * @ORM\OneToMany(targetEntity="TheaterMainBanner", mappedBy="mainBanner")
     *
     * @var Collection<int, TheaterMainBanner>
     */
    protected $theaters;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->pages        = new ArrayCollection();
        $this->specialSites = new ArrayCollection();
        $this->theaters     = new ArrayCollection();
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
     * Return image
     *
     * @return File
     */
    public function getImage(): File
    {
        return $this->image;
    }

    /**
     * Set image
     *
     * @param File $image
     * @return void
     */
    public function setImage(File $image)
    {
        $this->image = $image;
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
     * Return linkType
     *
     * @return integer
     */
    public function getLinkType(): int
    {
        return $this->linkType;
    }

    /**
     * Set linkType
     *
     * @param integer $linkType
     * @return void
     */
    public function setLinkType(int $linkType)
    {
        $this->linkType = $linkType;
    }

    /**
     * Return linkUrl
     *
     * @return string|null
     */
    public function getLinkUrl(): ?string
    {
        return $this->linkUrl;
    }

    /**
     * Set linkUrl
     *
     * @param string|null $linkUrl
     * @return void
     */
    public function setLinkUrl(?string $linkUrl)
    {
        $this->linkUrl = $linkUrl;
    }

    /**
     * Return pages
     *
     * @return Collection<int, PageMainBanner>
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }

    /**
     * Return specialSites
     *
     * @return Collection<int, SpecialSiteMainBanner>
     */
    public function getSpecialSites(): Collection
    {
        return $this->specialSites;
    }

    /**
     * Return theaters
     *
     * @return Collection<int, TheaterMainBanner>
     */
    public function getTheaters(): Collection
    {
        return $this->theaters;
    }
}
