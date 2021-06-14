<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * TitleRankingRank entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="title_ranking_rank", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class TitleRankingRank
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="TitleRanking", inversedBy="ranks")
     * @ORM\JoinColumn(name="title_ranking_id", referencedColumnName="id", onDelete="CASCADE")
     *
     * @var TitleRanking
     */
    protected $ranking;

    /**
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumn(name="title_id", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var Title|null
     */
    protected $title;

    /**
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     *
     * @var int
     */
    protected $rank;

    /**
     * @ORM\Column(type="string", name="detail_url", nullable=true)
     *
     * @var string|null
     */
    protected $detailUrl;

    public function getId(): int
    {
        return $this->id;
    }

    public function getRanking(): TitleRanking
    {
        return $this->ranking;
    }

    public function setRanking(TitleRanking $ranking): void
    {
        $this->ranking = $ranking;
    }

    public function getTitle(): ?Title
    {
        return $this->title;
    }

    public function setTitle(?Title $title): void
    {
        $this->title = $title;
    }

    public function getRank(): int
    {
        return $this->rank;
    }

    public function setRank(int $rank): void
    {
        $this->rank = $rank;
    }

    public function getDetailUrl(): ?string
    {
        return $this->detailUrl;
    }

    public function setDetailUrl(?string $detailUrl): void
    {
        $this->detailUrl = $detailUrl;
    }
}
