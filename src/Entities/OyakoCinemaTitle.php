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
 * OyakoCinemaTitle entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="oyako_cinema_title", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class OyakoCinemaTitle
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
     * @var Title
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     */
    protected $title;

    /**
     * @var string
     * @ORM\Column(type="string", name="title_url")
     */
    protected $titleUrl;

    /**
     * @var Collection<int, OyakoCinemaSchedule>
     * @ORM\OneToMany(
     *     targetEntity="OyakoCinemaSchedule",
     *     mappedBy="oyakoCinemaTitle",
     *     orphanRemoval=true
     * )
     */
    protected $oyakoCinemaSchedules;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->oyakoCinemaSchedules = new ArrayCollection();
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
     * Return titleUrl
     *
     * @return string
     */
    public function getTitleUrl(): string
    {
        return $this->titleUrl;
    }

    /**
     * Set titleUrl
     *
     * @param string $titleUrl
     * @return void
     */
    public function setTitleUrl(string $titleUrl)
    {
        $this->titleUrl = $titleUrl;
    }

    /**
     * Return oyakoCinemaSchedules
     *
     * @return Collection<int, OyakoCinemaSchedule>
     */
    public function getOyakoCinemaSchedules(): Collection
    {
        return $this->oyakoCinemaSchedules;
    }
}
