<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * PageTrailer entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="page_trailer", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class PageTrailer
{
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
     * @ORM\ManyToOne(targetEntity="Trailer")
     * @ORM\JoinColumn(name="trailer_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var Trailer
     */
    protected $trailer;

    /**
     * @ORM\ManyToOne(targetEntity="Page")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *
     * @var Page
     */
    protected $page;

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
     * Return trailer
     *
     * @return Trailer
     */
    public function getTrailer(): Trailer
    {
        return $this->trailer;
    }

    /**
     * Set trailer
     *
     * @param Trailer $trailer
     * @return void
     */
    public function setTrailer(Trailer $trailer)
    {
        $this->trailer = $trailer;
    }

    /**
     * Return page
     *
     * @return Page
     */
    public function getPage(): Page
    {
        return $this->page;
    }

    /**
     * Set page
     *
     * @param Page $page
     * @return void
     */
    public function setPage(Page $page)
    {
        $this->page = $page;
    }
}
