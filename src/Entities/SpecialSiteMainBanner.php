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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var MainBanner
     * @ORM\ManyToOne(targetEntity="MainBanner", inversedBy="specialSites")
     * @ORM\JoinColumn(name="main_banner_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $mainBanner;

    /**
     * @var SpecialSite
     * @ORM\ManyToOne(targetEntity="SpecialSite", inversedBy="mainBanners")
     * @ORM\JoinColumn(name="special_site_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $specialSite;

    /**
     * @var int
     * @ORM\Column(type="smallint", name="display_order", options={"unsigned"=true})
     */
    protected $displayOrder;

    /**
     * Return int
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Return mainBanner
     *
     * @return MainBanner
     */
    public function getMainBanner(): MainBanner
    {
        return $this->mainBanner;
    }

    /**
     * Set mainBanner
     *
     * @param MainBanner $mainBanner
     * @return void
     */
    public function setMainBanner(MainBanner $mainBanner)
    {
        $this->mainBanner = $mainBanner;
    }

    /**
     * Return specialSite
     *
     * @return SpecialSite
     */
    public function getSpecialSite(): SpecialSite
    {
        return $this->specialSite;
    }

    /**
     * Set specialSite
     *
     * @param SpecialSite $specialSite
     * @return void
     */
    public function setSpecialSite(SpecialSite $specialSite)
    {
        $this->specialSite = $specialSite;
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
}