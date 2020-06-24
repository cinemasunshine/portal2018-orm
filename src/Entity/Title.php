<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entity;

use Cinemasunshine\ORM\Entity\Traits\SavedUserTrait;
use Cinemasunshine\ORM\Entity\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entity\Traits\TimestampableTrait;
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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var File|null
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="image_file_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $image;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string|null
     * @ORM\Column(type="string", name="name_kana", nullable=true)
     */
    protected $nameKana;

    /**
     * @var string|null
     * @ORM\Column(type="string", name="name_original", nullable=true)
     */
    protected $nameOriginal;

    /**
     * @var string|null
     * @ORM\Column(type="string", nullable=true)
     */
    protected $credit;

    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=true)
     */
    protected $catchcopy;

    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=true)
     */
    protected $introduction;

    /**
     * @var string|null
     * @ORM\Column(type="string", nullable=true)
     */
    protected $director;

    /**
     * @var string|null
     * @ORM\Column(type="string", nullable=true)
     */
    protected $cast;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="date", name="publishing_expected_date", nullable=true)
     */
    protected $publishingExpectedDate;

    /**
     * @var string|null
     * @ORM\Column(type="string", name="official_site", nullable=true)
     */
    protected $officialSite;

    /**
     * @var int|null
     * @ORM\Column(type="smallint", nullable=true, options={"unsigned"=true})
     */
    protected $rating;

    /**
     * @var int[]|null
     * @ORM\Column(type="json", nullable=true)
     */
    protected $universal;

    /**
     * @var Collection<int, Campaign>
     * @ORM\OneToMany(targetEntity="Campaign", mappedBy="title", indexBy="id")
     */
    protected $campaigns;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->campaigns = new ArrayCollection();
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
     * @param \DateTime|string $publishingExpectedDate
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setPublishingExpectedDate($publishingExpectedDate)
    {
        if ($publishingExpectedDate instanceof \DateTime) {
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
}
