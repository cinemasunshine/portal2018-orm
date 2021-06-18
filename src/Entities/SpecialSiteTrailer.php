<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialSiteTrailer entity class
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="special_site_trailer", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class SpecialSiteTrailer
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
     * @ORM\ManyToOne(targetEntity="Trailer", inversedBy="specialSites")
     * @ORM\JoinColumn(name="trailer_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var Trailer
     */
    protected $trailer;

    /**
     * @ORM\ManyToOne(targetEntity="SpecialSite", inversedBy="trailers")
     * @ORM\JoinColumn(name="special_site_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var SpecialSite
     */
    protected $specialSite;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTrailer(): Trailer
    {
        return $this->trailer;
    }

    public function setTrailer(Trailer $trailer): void
    {
        $this->trailer = $trailer;
    }

    public function getSpecialSite(): SpecialSite
    {
        return $this->specialSite;
    }

    public function setSpecialSite(SpecialSite $specialSite): void
    {
        $this->specialSite = $specialSite;
    }
}
