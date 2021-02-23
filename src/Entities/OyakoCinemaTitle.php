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
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     *
     * @var Title
     */
    protected $title;

    /**
     * @ORM\Column(type="string", name="title_url")
     *
     * @var string
     */
    protected $titleUrl;

    /**
     * @ORM\OneToMany(
     *     targetEntity="OyakoCinemaSchedule",
     *     mappedBy="oyakoCinemaTitle",
     *     orphanRemoval=true
     * )
     *
     * @var Collection<int, OyakoCinemaSchedule>
     */
    protected $oyakoCinemaSchedules;

    public function __construct()
    {
        $this->oyakoCinemaSchedules = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): Title
    {
        return $this->title;
    }

    public function setTitle(Title $title): void
    {
        $this->title = $title;
    }

    public function getTitleUrl(): string
    {
        return $this->titleUrl;
    }

    public function setTitleUrl(string $titleUrl): void
    {
        $this->titleUrl = $titleUrl;
    }

    /**
     * @return Collection<int, OyakoCinemaSchedule>
     */
    public function getOyakoCinemaSchedules(): Collection
    {
        return $this->oyakoCinemaSchedules;
    }
}
