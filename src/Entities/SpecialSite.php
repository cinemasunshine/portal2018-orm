<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 * @ORM\Table(name="special_site", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class SpecialSite
{
    use SoftDeleteTrait;
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     * @ORM\GeneratedValue(strategy="NONE")
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string", unique=true)
     *
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="string", name="name_ja")
     *
     * @var string
     */
    protected $nameJa;

    /**
     * @ORM\ManyToMany(targetEntity="Theater", mappedBy="specialSites")
     *
     * @var Collection<int, Theater>
     */
    protected $theaters;

    /**
     * @ORM\OneToMany(targetEntity="SpecialSiteCampaign", mappedBy="specialSite", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, SpecialSiteCampaign>
     */
    protected $campaigns;

    /**
     * @ORM\OneToMany(targetEntity="SpecialSiteMainBanner", mappedBy="specialSite", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, SpecialSiteMainBanner>
     */
    protected $mainBanners;

    /**
     * @ORM\OneToMany(targetEntity="SpecialSiteNews", mappedBy="specialSite", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, SpecialSiteNews>
     */
    protected $newsList;

    /**
     * @ORM\OneToMany(targetEntity="SpecialSiteTrailer", mappedBy="specialSite", orphanRemoval=true)
     *
     * @var Collection<int, SpecialSiteTrailer>
     */
    protected $trailers;

    public function __construct(int $id)
    {
        $this->id          = $id;
        $this->theaters    = new ArrayCollection();
        $this->campaigns   = new ArrayCollection();
        $this->mainBanners = new ArrayCollection();
        $this->newsList    = new ArrayCollection();
        $this->trailers    = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getNameJa(): string
    {
        return $this->nameJa;
    }

    public function setNameJa(string $nameJa): void
    {
        $this->nameJa = $nameJa;
    }

    /**
     * @return Collection<int, Theater>
     */
    public function getTheaters(): Collection
    {
        return $this->theaters;
    }

    /**
     * @return Collection<int, SpecialSiteCampaign>
     */
    public function getCampaigns(): Collection
    {
        return $this->campaigns;
    }

    /**
     * @return Collection<int, SpecialSiteMainBanner>
     */
    public function getMainBanners(): Collection
    {
        return $this->mainBanners;
    }

    /**
     * @return Collection<int, SpecialSiteNews>
     */
    public function getNewsList(): Collection
    {
        return $this->newsList;
    }

    /**
     * @return Collection<int, SpecialSiteTrailer>
     */
    public function getTrailers(): Collection
    {
        return $this->trailers;
    }
}
