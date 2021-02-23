<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * TheaterMeta entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="theater_meta", options={"collate"="utf8mb4_general_ci"})
 */
class TheaterMeta
{
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     * @ORM\GeneratedValue(strategy="NONE")
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Theater", inversedBy="meta")
     * @ORM\JoinColumn(name="theater_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var Theater
     */
    protected $theater;

    /**
     * @ORM\Column(type="json", name="opening_hours")
     *
     * @var array{type:int,from_date:string,to_date:string|null,time:string}[]
     */
    protected $openingHours;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string|null
     */
    protected $twitter;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string|null
     */
    protected $facebook;

    /**
     * @ORM\Column(type="string", name="oyako_cinema_url", nullable=true)
     *
     * @var string|null
     */
    protected $oyakoCinemaUrl;

    public function __construct()
    {
        $this->openingHours = [];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTheater(): Theater
    {
        return $this->theater;
    }

    public function setTheater(Theater $theater): void
    {
        $this->theater = $theater;
    }

    /**
     * @return TheaterOpeningHour[]
     */
    public function getOpeningHours(): array
    {
        $hours = [];

        foreach ($this->openingHours as $hour) {
            $hours[] = TheaterOpeningHour::create($hour);
        }

        return $hours;
    }

    /**
     * @param TheaterOpeningHour[] $openingHours
     */
    public function setOpeningHours(array $openingHours): void
    {
        $this->openingHours = [];

        foreach ($openingHours as $hour) {
            /** @var TheaterOpeningHour $hour */
            $this->openingHours[] = $hour->toArray();
        }
    }

    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    public function setTwitter(?string $twitter): void
    {
        $this->twitter = $twitter;
    }

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(?string $facebook): void
    {
        $this->facebook = $facebook;
    }

    public function getOyakoCinemaUrl(): ?string
    {
        return $this->oyakoCinemaUrl;
    }

    public function setOyakoCinemaUrl(?string $oyakoCinemaUrl): void
    {
        $this->oyakoCinemaUrl = $oyakoCinemaUrl;
    }
}
