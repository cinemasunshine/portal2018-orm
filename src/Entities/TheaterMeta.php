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

    /**
     * constructor
     */
    public function __construct()
    {
        $this->openingHours = [];
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

    /**
     * Return openingHours
     *
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
     * Set openingHours
     *
     * @param TheaterOpeningHour[] $openingHours
     * @return void
     */
    public function setOpeningHours(array $openingHours)
    {
        $this->openingHours = [];

        foreach ($openingHours as $hour) {
            /** @var TheaterOpeningHour $hour */
            $this->openingHours[] = $hour->toArray();
        }
    }

    /**
     * Return twitter
     *
     * @return string|null
     */
    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    /**
     * Set twitter
     *
     * @param string|null $twitter
     * @return void
     */
    public function setTwitter(?string $twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * Return facebook
     *
     * @return string|null
     */
    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    /**
     * Set facebook
     *
     * @param string|null $facebook
     * @return void
     */
    public function setFacebook(?string $facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * Return oyakoCinemaUrl
     *
     * @return string|null
     */
    public function getOyakoCinemaUrl(): ?string
    {
        return $this->oyakoCinemaUrl;
    }

    /**
     * Set oyakoCinemaUrl
     *
     * @param string|null $oyakoCinemaUrl
     * @return void
     */
    public function setOyakoCinemaUrl(?string $oyakoCinemaUrl)
    {
        $this->oyakoCinemaUrl = $oyakoCinemaUrl;
    }
}
