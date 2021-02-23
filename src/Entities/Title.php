<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SavedUserTrait;
use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use InvalidArgumentException;

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
     * @var DateTime|null
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

    public function __construct()
    {
        $this->campaigns = new ArrayCollection();
        $this->trailers  = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getImage(): ?File
    {
        return $this->image;
    }

    public function setImage(?File $image): void
    {
        $this->image = $image;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getNameKana(): ?string
    {
        return $this->nameKana;
    }

    public function setNameKana(?string $nameKana): void
    {
        $this->nameKana = $nameKana;
    }

    public function getNameOriginal(): ?string
    {
        return $this->nameOriginal;
    }

    public function setNameOriginal(?string $nameOriginal): void
    {
        $this->nameOriginal = $nameOriginal;
    }

    public function getCredit(): ?string
    {
        return $this->credit;
    }

    public function setCredit(?string $credit): void
    {
        $this->credit = $credit;
    }

    public function getCatchcopy(): ?string
    {
        return $this->catchcopy;
    }

    public function setCatchcopy(?string $catchcopy): void
    {
        $this->catchcopy = $catchcopy;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(?string $introduction): void
    {
        $this->introduction = $introduction;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(?string $director): void
    {
        $this->director = $director;
    }

    public function getCast(): ?string
    {
        return $this->cast;
    }

    public function setCast(?string $cast): void
    {
        $this->cast = $cast;
    }

    public function getPublishingExpectedDate(): ?DateTime
    {
        return $this->publishingExpectedDate;
    }

    /**
     * @param DateTime|string|null $publishingExpectedDate
     *
     * @throws InvalidArgumentException
     */
    public function setPublishingExpectedDate($publishingExpectedDate): void
    {
        if (is_null($publishingExpectedDate) || $publishingExpectedDate instanceof DateTime) {
            $this->publishingExpectedDate = $publishingExpectedDate;
        } elseif (is_string($publishingExpectedDate)) {
            $this->publishingExpectedDate = new DateTime($publishingExpectedDate);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getOfficialSite(): ?string
    {
        return $this->officialSite;
    }

    public function setOfficialSite(?string $officialSite): void
    {
        $this->officialSite = $officialSite;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return int[]|null
     */
    public function getUniversal(): ?array
    {
        return $this->universal;
    }

    /**
     * @param int[]|null $universal
     */
    public function setUniversal(?array $universal): void
    {
        $this->universal = $universal;
    }

    /**
     * @return Collection<int, Campaign>
     */
    public function getCampaigns(): Collection
    {
        return $this->campaigns;
    }

    /**
     * @return Collection<int, Trailer>
     */
    public function getTrailers(): Collection
    {
        return $this->trailers;
    }
}
