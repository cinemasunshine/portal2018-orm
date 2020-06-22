<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entity;

use Cinemasunshine\ORM\Entity\Traits\SavedUserTrait;
use Cinemasunshine\ORM\Entity\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var Theater
     * @ORM\ManyToOne(targetEntity="Theater")
     * @ORM\JoinColumn(name="theater_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     */
    protected $theater;

    /**
     * @var Title
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     */
    protected $title;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="date", name="publishing_expected_date", nullable=true)
     */
    protected $publishingExpectedDate;

    /**
     * @var string|null
     * @ORM\Column(type="string", name="publishing_expected_date_text", nullable=true)
     */
    protected $publishingExpectedDateText;

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
}
