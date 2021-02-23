<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialSiteMainBanner entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="special_site_main_banner", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class SpecialSiteMainBanner
{
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
     * @ORM\ManyToOne(targetEntity="MainBanner", inversedBy="specialSites")
     * @ORM\JoinColumn(name="main_banner_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var MainBanner
     */
    protected $mainBanner;

    /**
     * @ORM\ManyToOne(targetEntity="SpecialSite", inversedBy="mainBanners")
     * @ORM\JoinColumn(name="special_site_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var SpecialSite
     */
    protected $specialSite;

    /**
     * @ORM\Column(type="smallint", name="display_order", options={"unsigned"=true})
     *
     * @var int
     */
    protected $displayOrder;

    public function getId(): int
    {
        return $this->id;
    }

    public function getMainBanner(): MainBanner
    {
        return $this->mainBanner;
    }

    public function setMainBanner(MainBanner $mainBanner): void
    {
        $this->mainBanner = $mainBanner;
    }

    public function getSpecialSite(): SpecialSite
    {
        return $this->specialSite;
    }

    public function setSpecialSite(SpecialSite $specialSite): void
    {
        $this->specialSite = $specialSite;
    }

    public function getDisplayOrder(): int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): void
    {
        $this->displayOrder = $displayOrder;
    }
}
