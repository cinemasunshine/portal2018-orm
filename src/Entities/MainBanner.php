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

    public function getLinkType(): int
    {
        return $this->linkType;
    }

    public function setLinkType(int $linkType): void
    {
        $this->linkType = $linkType;
    }

    public function getLinkUrl(): ?string
    {
        return $this->linkUrl;
    }

    public function setLinkUrl(?string $linkUrl): void
    {
        $this->linkUrl = $linkUrl;
    }

    /**
     * @return Collection<int, PageMainBanner>
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }

    /**
     * @return Collection<int, SpecialSiteMainBanner>
     */
    public function getSpecialSites(): Collection
    {
        return $this->specialSites;
    }

    /**
     * @return Collection<int, TheaterMainBanner>
     */
    public function getTheaters(): Collection
    {
        return $this->theaters;
    }
}
