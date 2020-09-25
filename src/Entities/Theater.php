<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Theater entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="theater", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Theater
{
    use SoftDeleteTrait;
    use TimestampableTrait;

    public const MASTER_VERSION_V1 = 1;
    public const MASTER_VERSION_V2 = 2;

    /**
     * 劇場ステータス
     *
     * 実際の劇場ではなく、システムにおける劇場のステータス。
     */
    public const STATUS_PRIVATE = 1; // 非公開。オープン準備中などポータルサイトには公開しないケース。
    public const STATUS_OPEN    = 2; // 劇場オープン。通常通り運用されてる状態。実際の劇場より先行して公開する期間も含める。
    public const STATUS_CLOSED  = 3; // 劇場閉館。実際の劇場が閉館した状態。

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
     * @var int
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     */
    protected $area;

    /**
     * @var int
     * @ORM\Column(type="smallint", name="master_version", options={"unsigned"=true})
     */
    protected $masterVersion;

    /**
     * @var string|null
     * @ORM\Column(type="string", name="master_code", length=3, nullable=true, options={"fixed":true})
     */
    protected $masterCode;

    /**
     * @var int
     * @ORM\Column(type="smallint", name="display_order", options={"unsigned"=true})
     */
    protected $displayOrder;

    /**
     * @var int
     * @ORM\Column(type="smallint", name="status", options={"unsigned"=true})
     */
    protected $status;

    /**
     * meta
     *
     * 設計の問題でnullを許容する形になってしまったが、nullにならないようデータで調整する。
     *
     * @var TheaterMeta|null
     * @ORM\OneToOne(targetEntity="TheaterMeta", mappedBy="theater")
     */
    protected $meta;

    /**
     * @var Collection<int, AdminUser>
     * @ORM\OneToMany(targetEntity="AdminUser", mappedBy="theater")
     */
    protected $adminUsers;

    /**
     * @var Collection<int, SpecialSite>
     * @ORM\ManyToMany(targetEntity="SpecialSite", inversedBy="theaters")
     * @ORM\JoinTable(name="theater_special_site",
     *      joinColumns={@ORM\JoinColumn(name="theater_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="special_site_id", referencedColumnName="id")}
     * )
     */
    protected $specialSites;

    /**
     * @var Collection<int, TheaterCampaign>
     * @ORM\OneToMany(targetEntity="TheaterCampaign", mappedBy="theater", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     */
    protected $campaigns;

    /**
     * @var Collection<int, TheaterMainBanner>
     * @ORM\OneToMany(targetEntity="TheaterMainBanner", mappedBy="theater", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     */
    protected $mainBanners;

    /**
     * @var Collection<int, TheaterNews>
     * @ORM\OneToMany(targetEntity="TheaterNews", mappedBy="theater", orphanRemoval=true)
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
        $this->id           = $id;
        $this->adminUsers   = new ArrayCollection();
        $this->specialSites = new ArrayCollection();
        $this->campaigns    = new ArrayCollection();
        $this->mainBanners  = new ArrayCollection();
        $this->newsList     = new ArrayCollection();
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
     * Return area
     *
     * @return integer
     */
    public function getArea(): int
    {
        return $this->area;
    }

    /**
     * Set area
     *
     * @param integer $area
     * @return void
     */
    public function setArea(int $area)
    {
        $this->area = $area;
    }

    /**
     * Return masterVersion
     *
     * @return integer
     */
    public function getMasterVersion(): int
    {
        return $this->masterVersion;
    }

    /**
     * set masterVersion
     *
     * @param integer $masterVersion
     * @return void
     */
    public function setMasterVersion(int $masterVersion)
    {
        $this->masterVersion = $masterVersion;
    }

    /**
     * Return masterCode
     *
     * @return string|null
     */
    public function getMasterCode(): ?string
    {
        return $this->masterCode;
    }

    /**
     * Set masterCode
     *
     * @param string|null $masterCode
     * @return void
     */
    public function setMasterCode(?string $masterCode)
    {
        $this->masterCode = $masterCode;
    }

    /**
     * Return displayOrder
     *
     * @return integer
     */
    public function getDisplayOrder(): int
    {
        return $this->displayOrder;
    }

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     * @return void
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }

    /**
     * Return status
     *
     * @return integer
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return void
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    /**
     * Return meta
     *
     * @return TheaterMeta|null
     */
    public function getMeta(): ?TheaterMeta
    {
        return $this->meta;
    }

    /**
     * Return adminUsers
     *
     * @return Collection<int, AdminUser>
     */
    public function getAdminUsers(): Collection
    {
        return $this->adminUsers;
    }

    /**
     * Return specialSites
     *
     * @return Collection<int, SpecialSite>
     */
    public function getSpecialSites(): Collection
    {
        return $this->specialSites;
    }

    /**
     * Return campaigns
     *
     * @return Collection<int, TheaterCampaign>
     */
    public function getCampaigns(): Collection
    {
        return $this->campaigns;
    }

    /**
     * Return mainBanners
     *
     * @return Collection<int, TheaterMainBanner>
     */
    public function getMainBanners(): Collection
    {
        return $this->mainBanners;
    }

    /**
     * Return newsList
     *
     * @return Collection<int, TheaterNews>
     */
    public function getNewsList(): Collection
    {
        return $this->newsList;
    }
}
