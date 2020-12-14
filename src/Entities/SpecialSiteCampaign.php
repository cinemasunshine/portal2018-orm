<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialSiteCampaign entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="special_site_campaign", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class SpecialSiteCampaign
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
     * @ORM\ManyToOne(targetEntity="Campaign", inversedBy="specialSites")
     * @ORM\JoinColumn(name="campaign_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var Campaign
     */
    protected $campaign;

    /**
     * @ORM\ManyToOne(targetEntity="SpecialSite", inversedBy="campaigns")
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
     * Return campaign
     *
     * @return Campaign
     */
    public function getCampaign(): Campaign
    {
        return $this->campaign;
    }

    /**
     * Set campaign
     *
     * @param Campaign $campaign
     * @return void
     */
    public function setCampaign(Campaign $campaign)
    {
        $this->campaign = $campaign;
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
