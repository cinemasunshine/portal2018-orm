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
 * @ORM\Table(name="page", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Page
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
     * @ORM\OneToMany(targetEntity="PageCampaign", mappedBy="page", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, PageCampaign>
     */
    protected $campaigns;

    /**
     * @ORM\OneToMany(targetEntity="PageMainBanner", mappedBy="page", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, PageMainBanner>
     */
    protected $mainBanners;

    /**
     * @ORM\OneToMany(targetEntity="PageNews", mappedBy="page", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, PageNews>
     */
    protected $newsList;

    /**
     * @ORM\OneToMany(targetEntity="PageTrailer", mappedBy="page", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, PageTrailer>
     */
    protected $trailers;

    public function __construct(int $id)
    {
        $this->id          = $id;
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
     * @return Collection<int, PageCampaign>
     */
    public function getCampaigns(): Collection
    {
        return $this->campaigns;
    }

    /**
     * @return Collection<int, PageMainBanner>
     */
    public function getMainBanners(): Collection
    {
        return $this->mainBanners;
    }

    /**
     * @return Collection<int, PageNews>
     */
    public function getNewsList(): Collection
    {
        return $this->newsList;
    }

    /**
     * @return Collection<int, PageTrailer>
     */
    public function getTrailers(): Collection
    {
        return $this->trailers;
    }
}
