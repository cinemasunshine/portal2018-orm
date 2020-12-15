<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * OyakoCinemaSchedule entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="oyako_cinema_schedule", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class OyakoCinemaSchedule
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
     * @ORM\ManyToOne(targetEntity="OyakoCinemaTitle", inversedBy="oyakoCinemaSchedules")
     * @ORM\JoinColumn(name="oyako_cinema_title_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var OyakoCinemaTitle
     */
    protected $oyakoCinemaTitle;

    /**
     * @ORM\Column(type="date")
     *
     * @var \DateTime
     */
    protected $date;

    /**
     * @ORM\OneToMany(
     *     targetEntity="OyakoCinemaTheater",
     *     mappedBy="oyakoCinemaSchedule",
     *     orphanRemoval=true
     * )
     *
     * @var Collection<int, OyakoCinemaTheater>
     */
    protected $oyakoCinemaTheaters;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->oyakoCinemaTheaters = new ArrayCollection();
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
     * Return oyakoCinemaTitle
     *
     * @return OyakoCinemaTitle
     */
    public function getOyakoCinemaTitle(): OyakoCinemaTitle
    {
        return $this->oyakoCinemaTitle;
    }

    /**
     * Set oyakoCinemaTitle
     *
     * @param OyakoCinemaTitle $oyakoCinemaTitle
     * @return void
     */
    public function setOyakoCinemaTitle(OyakoCinemaTitle $oyakoCinemaTitle)
    {
        $this->oyakoCinemaTitle = $oyakoCinemaTitle;
    }

    /**
     * Return date
     *
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * set date
     *
     * @param \DateTime|string $date
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function setDate($date)
    {
        if ($date instanceof \DateTime) {
            $this->date = $date;
        } elseif (is_string($date)) {
            $this->date = new \DateTime($date);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return oyakoCinemaTheaters
     *
     * @return Collection<int, OyakoCinemaTheater>
     */
    public function getOyakoCinemaTheaters(): Collection
    {
        return $this->oyakoCinemaTheaters;
    }
}
