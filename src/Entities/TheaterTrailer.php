<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * TheaterTrailer entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="theater_trailer", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class TheaterTrailer
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
     * @ORM\ManyToOne(targetEntity="Trailer", inversedBy="theaters")
     * @ORM\JoinColumn(name="trailer_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var Trailer
     */
    protected $trailer;

    /**
     * @ORM\ManyToOne(targetEntity="Theater", inversedBy="trailers")
     * @ORM\JoinColumn(name="theater_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var Theater
     */
    protected $theater;

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

    public function getTheater(): Theater
    {
        return $this->theater;
    }

    public function setTheater(Theater $theater): void
    {
        $this->theater = $theater;
    }
}
