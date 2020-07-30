<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialSiteNews entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="special_site_news", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class SpecialSiteNews
{
    use TimestampableTrait;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var News
     * @ORM\ManyToOne(targetEntity="News", inversedBy="specialSites")
     * @ORM\JoinColumn(name="news_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $news;

    /**
     * @var SpecialSite
     * @ORM\ManyToOne(targetEntity="SpecialSite", inversedBy="newsList")
     * @ORM\JoinColumn(name="special_site_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $specialSite;

    /**
     * @var int
     * @ORM\Column(type="smallint", name="display_order", options={"unsigned"=true})
     */
    protected $displayOrder;

    /**
     * Return int
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Return news
     *
     * @return News
     */
    public function getNews(): News
    {
        return $this->news;
    }

    /**
     * Set news
     *
     * @param News $news
     * @return void
     */
    public function setNews(News $news)
    {
        $this->news = $news;
    }

    /**
     * Return specialSite
     *
     * @return SpecialSite
     */
    public function getSpecialSite(): SpecialSite
    {
        return $this->specialSite;
    }

    /**
     * Set specialSite
     *
     * @param SpecialSite $specialSite
     * @return void
     */
    public function setSpecialSite(SpecialSite $specialSite)
    {
        $this->specialSite = $specialSite;
    }

    /**
     * Return displayOrder
     *
     * @return integer
     */
    public function getDisplayOrder(): int
    {
        return $this->displayOrder;
    }

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     * @return void
     */
    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }
}
