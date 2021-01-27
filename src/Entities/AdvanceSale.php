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
 * AdvanceSale entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="advance_sale", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class AdvanceSale
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
     * @ORM\ManyToOne(targetEntity="Theater")
     * @ORM\JoinColumn(name="theater_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     *
     * @var Theater
     */
    protected $theater;

    /**
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     *
     * @var Title
     */
    protected $title;

    /**
     * @ORM\Column(type="date", name="publishing_expected_date", nullable=true)
     *
     * @var DateTime|null
     */
    protected $publishingExpectedDate;

    /**
     * @ORM\Column(type="string", name="publishing_expected_date_text", nullable=true)
     *
     * @var string|null
     */
    protected $publishingExpectedDateText;

    /**
     * @ORM\OneToMany(targetEntity="AdvanceTicket", mappedBy="advanceSale", indexBy="id")
     *
     * @var Collection<int, AdvanceTicket>
     */
    protected $advanceTickets;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->advanceTickets = new ArrayCollection();
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
     * Return title
     *
     * @return Title
     */
    public function getTitle(): Title
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param Title $title
     * @return void
     */
    public function setTitle(Title $title)
    {
        $this->title = $title;
    }

    /**
     * Return publishingExpectedDate
     *
     * @return DateTime|null
     */
    public function getPublishingExpectedDate(): ?DateTime
    {
        return $this->publishingExpectedDate;
    }

    /**
     * Set publishingExpectedDate
     *
     * @param DateTime|string|null $publishingExpectedDate
     * @return void
     *
     * @throws InvalidArgumentException
     */
    public function setPublishingExpectedDate($publishingExpectedDate)
    {
        if (is_null($publishingExpectedDate) || $publishingExpectedDate instanceof DateTime) {
            $this->publishingExpectedDate = $publishingExpectedDate;
        } elseif (is_string($publishingExpectedDate)) {
            $this->publishingExpectedDate = new DateTime($publishingExpectedDate);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return publishingExpectedDateText
     *
     * @return string|null
     */
    public function getPublishingExpectedDateText(): ?string
    {
        return $this->publishingExpectedDateText;
    }

    /**
     * Set publishingExpectedDateText
     *
     * @param string|null $publishingExpectedDateText
     * @return void
     */
    public function setPublishingExpectedDateText(?string $publishingExpectedDateText)
    {
        $this->publishingExpectedDateText = $publishingExpectedDateText;
    }

    /**
     * Return advanceTickets
     *
     * @return Collection<int, AdvanceTicket>
     */
    public function getAdvanceTickets(): Collection
    {
        return $this->advanceTickets;
    }
}
