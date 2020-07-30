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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var OyakoCinemaSchedule
     * @ORM\ManyToOne(targetEntity="OyakoCinemaSchedule", inversedBy="oyakoCinemaTheaters")
     * @ORM\JoinColumn(name="oyako_cinema_schedule_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $oyakoCinemaSchedule;

    /**
     * @var Theater
     * @ORM\ManyToOne(targetEntity="Theater")
     * @ORM\JoinColumn(name="theater_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $theater;

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
     * Return oyakoCinemaSchedule
     *
     * @return OyakoCinemaSchedule
     */
    public function getOyakoCinemaSchedule(): OyakoCinemaSchedule
    {
        return $this->oyakoCinemaSchedule;
    }

    /**
     * Set oyakoCinemaSchedule
     *
     * @param OyakoCinemaSchedule $oyakoCinemaSchedule
     * @return void
     */
    public function setOyakoCinemaSchedule(OyakoCinemaSchedule $oyakoCinemaSchedule)
    {
        $this->oyakoCinemaSchedule = $oyakoCinemaSchedule;
    }

    /**
     * Return theater
     *
     * @return Theater
     */
    public function getTheater(): Theater
    {
        return $this->theater;
    }

    /**
     * Set theater
     *
     * @param Theater $theater
     * @return void
     */
    public function setTheater(Theater $theater)
    {
        $this->theater = $theater;
    }
}
