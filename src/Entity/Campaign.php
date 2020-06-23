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
 * Campaign entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="campaign", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Campaign
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
     * @var Title|null
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $title;

    /**
     * @var File
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="image_file_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     */
    protected $image;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="start_dt")
     */
    protected $startDt;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="end_dt")
     */
    protected $endDt;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $url;

    /**
     * @var Collection<int, PageCampaign>
     * @ORM\OneToMany(targetEntity="PageCampaign", mappedBy="campaign")
     */
    protected $pages;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->pages = new ArrayCollection();
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
     * Return title
     *
     * @return Title|null
     */
    public function getTitle(): ?Title
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param Title|null $title
     * @return void
     */
    public function setTitle(?Title $title)
    {
        $this->title = $title;
    }

    /**
     * Return image
     *
     * @return File
     */
    public function getImage(): File
    {
        return $this->image;
    }

    /**
     * Set image
     *
     * @param File $image
     * @return void
     */
    public function setImage(File $image)
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
     * Return startDt
     *
     * @return \DateTime
     */
    public function getStartDt(): \DateTime
    {
        return $this->startDt;
    }

    /**
     * Set startDt
     *
     * @param \DateTime|string $startDt
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setStartDt($startDt)
    {
        if ($startDt instanceof \DateTime) {
            $this->startDt = $startDt;
        } elseif (is_string($startDt)) {
            $this->startDt = new \DateTime($startDt);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return endDt
     *
     * @return \DateTime
     */
    public function getEndDt(): \DateTime
    {
        return $this->endDt;
    }

    /**
     * Set endDt
     *
     * @param \DateTime|string $endDt
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setEndDt($endDt)
    {
        if ($endDt instanceof \DateTime) {
            $this->endDt = $endDt;
        } elseif (is_string($endDt)) {
            $this->endDt = new \DateTime($endDt);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return void
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * Return pages
     *
     * @return Collection<int, PageCampaign>
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }
}
