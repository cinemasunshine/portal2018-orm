<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entity;

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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var OyakoCinemaTitle
     * @ORM\ManyToOne(targetEntity="OyakoCinemaTitle", inversedBy="oyakoCinemaSchedules")
     * @ORM\JoinColumn(name="oyako_cinema_title_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $oyakoCinemaTitle;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    protected $date;

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
}
