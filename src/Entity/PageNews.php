<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entity;

use Cinemasunshine\ORM\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * PageNews entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="page_news", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class PageNews
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
     * @ORM\ManyToOne(targetEntity="News", inversedBy="pages")
     * @ORM\JoinColumn(name="news_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $news;

    /**
     * @var Page
     * @ORM\ManyToOne(targetEntity="Page", inversedBy="newsList")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $page;

    /**
     * @var int
     * @ORM\Column(type="smallint", name="display_order", options={"unsigned"=true})
     */
    protected $displayOrder;

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