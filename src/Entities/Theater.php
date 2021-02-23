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
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     *
     * @var int
     */
    protected $area;

    /**
     * @ORM\Column(type="smallint", name="master_version", options={"unsigned"=true})
     *
     * @var int
     */
    protected $masterVersion;

    /**
     * @ORM\Column(type="string", name="master_code", length=3, nullable=true, options={"fixed":true})
     *
     * @var string|null
     */
    protected $masterCode;

    /**
     * @ORM\Column(type="smallint", name="display_order", options={"unsigned"=true})
     *
     * @var int
     */
    protected $displayOrder;

    /**
     * @ORM\Column(type="smallint", name="status", options={"unsigned"=true})
     *
     * @var int
     */
    protected $status;

    /**
     * meta
     *
     * 設計の問題でnullを許容する形になってしまったが、nullにならないようデータで調整する。
     *
     * @ORM\OneToOne(targetEntity="TheaterMeta", mappedBy="theater")
     *
     * @var TheaterMeta|null
     */
    protected $meta;

    /**
     * @ORM\OneToMany(targetEntity="AdminUser", mappedBy="theater")
     *
     * @var Collection<int, AdminUser>
     */
    protected $adminUsers;

    /**
     * @ORM\ManyToMany(targetEntity="SpecialSite", inversedBy="theaters")
     * @ORM\JoinTable(name="theater_special_site",
     *      joinColumns={@ORM\JoinColumn(name="theater_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="special_site_id", referencedColumnName="id")}
     * )
     *
     * @var Collection<int, SpecialSite>
     */
    protected $specialSites;

    /**
     * @ORM\OneToMany(targetEntity="TheaterCampaign", mappedBy="theater", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, TheaterCampaign>
     */
    protected $campaigns;

    /**
     * @ORM\OneToMany(targetEntity="TheaterMainBanner", mappedBy="theater", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, TheaterMainBanner>
     */
    protected $mainBanners;

    /**
     * @ORM\OneToMany(targetEntity="TheaterNews", mappedBy="theater", orphanRemoval=true)
     * @ORM\OrderBy({"displayOrder" = "ASC"})
     *
     * @var Collection<int, TheaterNews>
     */
    protected $newsList;

    public function __construct(int $id)
    {
        $this->id           = $id;
        $this->adminUsers   = new ArrayCollection();
        $this->specialSites = new ArrayCollection();
        $this->campaigns    = new ArrayCollection();
        $this->mainBanners  = new ArrayCollection();
        $this->newsList     = new ArrayCollection();
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

    public function getArea(): int
    {
        return $this->area;
    }

    public function setArea(int $area): void
    {
        $this->area = $area;
    }

    public function getMasterVersion(): int
    {
        return $this->masterVersion;
    }

    public function setMasterVersion(int $masterVersion): void
    {
        $this->masterVersion = $masterVersion;
    }

    public function getMasterCode(): ?string
    {
        return $this->masterCode;
    }

    public function setMasterCode(?string $masterCode): void
    {
        $this->masterCode = $masterCode;
    }

    public function getDisplayOrder(): int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): void
    {
        $this->displayOrder = $displayOrder;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getMeta(): ?TheaterMeta
    {
        return $this->meta;
    }

    /**
     * @return Collection<int, AdminUser>
     */
    public function getAdminUsers(): Collection
    {
        return $this->adminUsers;
    }

    /**
     * @return Collection<int, SpecialSite>
     */
    public function getSpecialSites(): Collection
    {
        return $this->specialSites;
    }

    /**
     * @return Collection<int, TheaterCampaign>
     */
    public function getCampaigns(): Collection
    {
        return $this->campaigns;
    }

    /**
     * @return Collection<int, TheaterMainBanner>
     */
    public function getMainBanners(): Collection
    {
        return $this->mainBanners;
    }

    /**
     * @return Collection<int, TheaterNews>
     */
    public function getNewsList(): Collection
    {
        return $this->newsList;
    }
}
