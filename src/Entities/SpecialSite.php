<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialSite entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="special_site", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class SpecialSite
{
    use SoftDeleteTrait;
    use TimestampableTrait;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", unique=true)
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type="string", name="name_ja")
     */
    protected $nameJa;

    /**
     * @var Collection<int, Theater>
     * @ORM\ManyToMany(targetEntity="Theater", mappedBy="specialSites")
     */
    protected $theaters;

    /**
     * @var Collection<int, SpecialSiteCampaign>
     * @ORM\OneToMany(targetEntity="SpecialSiteCampaign", mappedBy="specialSite", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     */
    protected $campaigns;

    /**
     * @var Collection<int, SpecialSiteMainBanner>
     * @ORM\OneToMany(targetEntity="SpecialSiteMainBanner", mappedBy="specialSite", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     */
    protected $mainBanners;

    /**
     * @var Collection<int, SpecialSiteNews>
     * @ORM\OneToMany(targetEntity="SpecialSiteNews", mappedBy="specialSite", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     */
    protected $newsList;

    /**
     * constructor
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
        $this->theaters = new ArrayCollection();
        $this->campaigns = new ArrayCollection();
        $this->mainBanners = new ArrayCollection();
        $this->newsList = new ArrayCollection();
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
     * Return nameJa
     *
     * @return string
     */
    public function getNameJa(): string
    {
        return $this->nameJa;
    }

    /**
     * Set nameJa
     *
     * @param string $nameJa
     * @return void
     */
    public function setNameJa(string $nameJa)
    {
        $this->nameJa = $nameJa;
    }

    /**
     * Return theaters
     *
     * @return Collection<int, Theater>
     */
    public function getTheaters(): Collection
    {
        return $this->theaters;
    }

    /**
     * Return campaigns
     *
     * @return Collection<int, SpecialSiteCampaign>
     */
    public function getCampaigns(): Collection
    {
        return $this->campaigns;
    }

    /**
     * Return  mainBanners
     *
     * @return Collection<int, SpecialSiteMainBanner>
     */
    public function getMainBanners(): Collection
    {
        return $this->mainBanners;
    }

    /**
     * Return newsList
     *
     * @return Collection<int, SpecialSiteNews>
     */
    public function getNewsList(): Collection
    {
        return $this->newsList;
    }
}
