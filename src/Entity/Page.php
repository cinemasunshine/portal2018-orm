<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entity;

use Cinemasunshine\ORM\Entity\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entity\Traits\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Page entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="page", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Page
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
     * @var Collection<int, PageCampaign>
     * @ORM\OneToMany(targetEntity="PageCampaign", mappedBy="page", orphanRemoval=true)
     */
    protected $campaigns;

    /**
     * @var Collection<int, PageMainBanner>
     * @ORM\OneToMany(targetEntity="PageMainBanner", mappedBy="page", orphanRemoval=true)
     */
    protected $mainBanners;

    /**
     * @var Collection<int, PageNews>
     * @ORM\OneToMany(targetEntity="PageNews", mappedBy="page", orphanRemoval=true)
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
     * Return campaigns
     *
     * @return Collection<int, PageCampaign>
     */
    public function getCampaigns(): Collection
    {
        return $this->campaigns;
    }

    /**
     * Return mainBanners
     *
     * @return Collection<int, PageMainBanner>
     */
    public function getMainBanners(): Collection
    {
        return $this->mainBanners;
    }

    /**
     * Return newsList
     *
     * @return Collection<int, PageNews>
     */
    public function getNewsList(): Collection
    {
        return $this->newsList;
    }
}
