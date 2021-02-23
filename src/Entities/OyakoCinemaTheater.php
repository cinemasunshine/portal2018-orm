<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * OyakoCinemaTheater entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="oyako_cinema_theater", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class OyakoCinemaTheater
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="OyakoCinemaSchedule", inversedBy="oyakoCinemaTheaters")
     * @ORM\JoinColumn(name="oyako_cinema_schedule_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var OyakoCinemaSchedule
     */
    protected $oyakoCinemaSchedule;

    /**
     * @ORM\ManyToOne(targetEntity="Theater")
     * @ORM\JoinColumn(name="theater_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var Theater
     */
    protected $theater;

    public function getId(): int
    {
        return $this->id;
    }

    public function getOyakoCinemaSchedule(): OyakoCinemaSchedule
    {
        return $this->oyakoCinemaSchedule;
    }

    public function setOyakoCinemaSchedule(OyakoCinemaSchedule $oyakoCinemaSchedule): void
    {
        $this->oyakoCinemaSchedule = $oyakoCinemaSchedule;
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
