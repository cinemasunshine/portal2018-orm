<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use InvalidArgumentException;

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
     * @var DateTime
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

    public function __construct()
    {
        $this->oyakoCinemaTheaters = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getOyakoCinemaTitle(): OyakoCinemaTitle
    {
        return $this->oyakoCinemaTitle;
    }

    public function setOyakoCinemaTitle(OyakoCinemaTitle $oyakoCinemaTitle): void
    {
        $this->oyakoCinemaTitle = $oyakoCinemaTitle;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime|string $date
     *
     * @throws InvalidArgumentException
     */
    public function setDate($date): void
    {
        if ($date instanceof DateTime) {
            $this->date = $date;
        } elseif (is_string($date)) {
            $this->date = new DateTime($date);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * @return Collection<int, OyakoCinemaTheater>
     */
    public function getOyakoCinemaTheaters(): Collection
    {
        return $this->oyakoCinemaTheaters;
    }
}
