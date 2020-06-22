<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entity;

use Cinemasunshine\ORM\Entity\Traits\SavedUserTrait;
use Cinemasunshine\ORM\Entity\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trailer entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="trailer", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class Trailer
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
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $youtube;

    /**
     * @var File
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="banner_image_file_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     */
    protected $bannerImage;

    /**
     * @var string
     * @ORM\Column(type="string", name="banner_link_url")
     */
    protected $bannerLinkUrl;

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
     * Return youtube
     *
     * @return string
     */
    public function getYoutube(): string
    {
        return $this->youtube;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     * @return void
     */
    public function setYoutube(string $youtube)
    {
        $this->youtube = $youtube;
    }

    /**
     * Return bannerImage
     *
     * @return File
     */
    public function getBannerImage(): File
    {
        return $this->bannerImage;
    }

    /**
     * Set bannerImage
     *
     * @param File $bannerImage
     * @return void
     */
    public function setBannerImage(File $bannerImage)
    {
        $this->bannerImage = $bannerImage;
    }

    /**
     * Return bannerLinkUrl
     *
     * @test
     * @return string
     */
    public function getBannerLinkUrl(): string
    {
        return $this->bannerLinkUrl;
    }

    /**
     * set bannerLinkUrl
     *
     * @param string $bannerLinkUrl
     * @return void
     */
    public function setBannerLinkUrl(string $bannerLinkUrl)
    {
        $this->bannerLinkUrl = $bannerLinkUrl;
    }
}
