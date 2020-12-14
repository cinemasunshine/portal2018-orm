<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SavedUserTrait;
use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Title entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="title", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Title
{
    use SavedUserTrait;
    use SoftDeleteTrait;
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
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="image_file_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var File|null
     */
    protected $image;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="string", name="name_kana", nullable=true)
     *
     * @var string|null
     */
    protected $nameKana;

    /**
     * @ORM\Column(type="string", name="name_original", nullable=true)
     *
     * @var string|null
     */
    protected $nameOriginal;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string|null
     */
    protected $credit;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var string|null
     */
    protected $catchcopy;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var string|null
     */
    protected $introduction;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string|null
     */
    protected $director;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string|null
     */
    protected $cast;

    /**
     * @ORM\Column(type="date", name="publishing_expected_date", nullable=true)
     *
     * @var \DateTime|null
     */
    protected $publishingExpectedDate;

    /**
     * @ORM\Column(type="string", name="official_site", nullable=true)
     *
     * @var string|null
     */
    protected $officialSite;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"unsigned"=true})
     *
     * @var int|null
     */
    protected $rating;

    /**
     * @ORM\Column(type="json", nullable=true)
     *
     * @var int[]|null
     */
    protected $universal;

    /**
     * @ORM\OneToMany(targetEntity="Campaign", mappedBy="title", indexBy="id")
     *
     * @var Collection<int, Campaign>
     */
    protected $campaigns;

    /**
     * @ORM\OneToMany(targetEntity="Trailer", mappedBy="title", indexBy="id")
     *
     * @var Collection<int, Trailer>
     */
    protected $trailers;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->campaigns = new ArrayCollection();
        $this->trailers  = new ArrayCollection();
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
     * Return image
     *
     * @return File|null
     */
    public function getImage(): ?File
    {
        return $this->image;
    }

    /**
     * Set image
     *
     * @param File|null $image
     * @return void
     */
    public function setImage(?File $image)
    {
        $this->image = $image;
    }

    /**
     * Return name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Return nameKana
     *
     * @return string|null
     */
    public function getNameKana(): ?string
    {
        return $this->nameKana;
    }

    /**
     * Set nameKana
     *
     * @param string|null $nameKana
     * @return void
     */
    public function setNameKana(?string $nameKana)
    {
        $this->nameKana = $nameKana;
    }

    /**
     * Return nameOriginal
     *
     * @return string|null
     */
    public function getNameOriginal(): ?string
    {
        return $this->nameOriginal;
    }

    /**
     * Set nameOriginal
     *
     * @param string|null $nameOriginal
     * @return void
     */
    public function setNameOriginal(?string $nameOriginal)
    {
        $this->nameOriginal = $nameOriginal;
    }

    /**
     * Return credit
     *
     * @return string|null
     */
    public function getCredit(): ?string
    {
        return $this->credit;
    }

    /**
     * Set credit
     *
     * @param string|null $credit
     * @return void
     */
    public function setCredit(?string $credit)
    {
        $this->credit = $credit;
    }

    /**
     * Return catchcopy
     *
     * @return string|null
     */
    public function getCatchcopy(): ?string
    {
        return $this->catchcopy;
    }

    /**
     * Set catchcopy
     *
     * @param string|null $catchcopy
     * @return void
     */
    public function setCatchcopy(?string $catchcopy)
    {
        $this->catchcopy = $catchcopy;
    }

    /**
     * Return introduction
     *
     * @return string|null
     */
    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    /**
     * Set introduction
     *
     * @param string|null $introduction
     * @return void
     */
    public function setIntroduction(?string $introduction)
    {
        $this->introduction = $introduction;
    }

    /**
     * Return director
     *
     * @return string|null
     */
    public function getDirector(): ?string
    {
        return $this->director;
    }

    /**
     * Set director
     *
     * @param string|null $director
     * @return void
     */
    public function setDirector(?string $director)
    {
        $this->director = $director;
    }

    /**
     * Return cast
     *
     * @return string|null
     */
    public function getCast(): ?string
    {
        return $this->cast;
    }

    /**
     * Set cast
     *
     * @param string|null $cast
     * @return void
     */
    public function setCast(?string $cast)
    {
        $this->cast = $cast;
    }

    /**
     * Return publishingExpectedDate
     *
     * @return \DateTime|null
     */
    public function getPublishingExpectedDate(): ?\DateTime
    {
        return $this->publishingExpectedDate;
    }

    /**
     * Set publishingExpectedDate
     *
     * @param \DateTime|string|null $publishingExpectedDate
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function setPublishingExpectedDate($publishingExpectedDate)
    {
        if (is_null($publishingExpectedDate) || $publishingExpectedDate instanceof \DateTime) {
            $this->publishingExpectedDate = $publishingExpectedDate;
        } elseif (is_string($publishingExpectedDate)) {
            $this->publishingExpectedDate = new \DateTime($publishingExpectedDate);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return officialSite
     *
     * @return string|null
     */
    public function getOfficialSite(): ?string
    {
        return $this->officialSite;
    }

    /**
     * Set officialSite
     *
     * @param string|null $officialSite
     * @return void
     */
    public function setOfficialSite(?string $officialSite)
    {
        $this->officialSite = $officialSite;
    }

    /**
     * Return rating
     *
     * @return integer|null
     */
    public function getRating(): ?int
    {
        return $this->rating;
    }

    /**
     * set rating
     *
     * @param integer|null $rating
     * @return void
     */
    public function setRating(?int $rating)
    {
        $this->rating = $rating;
    }

    /**
     * Return universal
     *
     * @return int[]|null
     */
    public function getUniversal(): ?array
    {
        return $this->universal;
    }

    /**
     * Set universal
     *
     * @param int[]|null $universal
     * @return void
     */
    public function setUniversal(?array $universal)
    {
        $this->universal = $universal;
    }

    /**
     * Return campaigns
     *
     * @return Collection<int, Campaign>
     */
    public function getCampaigns(): Collection
    {
        return $this->campaigns;
    }

    /**
     * Return trailers
     *
     * @return Collection<int, Trailer>
     */
    public function getTrailers(): Collection
    {
        return $this->trailers;
    }
}
