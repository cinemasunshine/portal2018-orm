<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdvanceTicket entity
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="advance_ticket", options={"collate"="utf8mb4_general_ci"})
 * @ORM\HasLifecycleCallbacks
 */
class AdvanceTicket
{
    use SoftDeleteTrait;
    use TimestampableTrait;

    public const TYPE_MVTK  = 1;
    public const TYPE_PAPER = 2;

    public const SPECIAL_GIFT_STOCK_IN     = 1;
    public const SPECIAL_GIFT_STOCK_FEW    = 2;
    public const SPECIAL_GIFT_STOCK_NOT_IN = 3;

    public const STATUS_PRE_SALE = 1;
    public const STATUS_SALE     = 2;
    public const STATUS_SALE_END = 3;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var AdvanceSale
     * @ORM\ManyToOne(targetEntity="AdvanceSale", inversedBy="advanceTickets")
     * @ORM\JoinColumn(name="advance_sale_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     */
    protected $advanceSale;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="publishing_start_dt")
     */
    protected $publishingStartDt;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="release_dt")
     */
    protected $releaseDt;

    /**
     * @var string|null
     * @ORM\Column(type="string", name="release_dt_text", nullable=true)
     */
    protected $releaseDtText;

    /**
     * @var bool
     * @ORM\Column(type="boolean", name="is_sales_end", options={"default":false})
     */
    protected $isSalesEnd;

    /**
     * @var int
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     */
    protected $type;

    /**
     * @var string|null
     * @ORM\Column(type="string", name="price_text", nullable=true)
     */
    protected $priceText;

    /**
     * @var string|null
     * @ORM\Column(type="string", name="special_gift", nullable=true)
     */
    protected $specialGift;

    /**
     * @var int|null
     * @ORM\Column(type="smallint", name="special_gift_stock", nullable=true, options={"unsigned"=true})
     */
    protected $specialGiftStock;

    /**
     * @var File|null
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="special_gift_image", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     */
    protected $specialGiftImage;

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
     * Return advanceSale
     *
     * @return AdvanceSale
     */
    public function getAdvanceSale(): AdvanceSale
    {
        return $this->advanceSale;
    }

    /**
     * Set advanceSale
     *
     * @param AdvanceSale $advanceSale
     * @return void
     */
    public function setAdvanceSale(AdvanceSale $advanceSale)
    {
        $this->advanceSale = $advanceSale;
    }

    /**
     * Return publishingStartDt
     *
     * @return \DateTime
     */
    public function getPublishingStartDt(): \DateTime
    {
        return $this->publishingStartDt;
    }

    /**
     * Set publishingStartDt
     *
     * @param \DateTime|string $publishingStartDt
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setPublishingStartDt($publishingStartDt)
    {
        if ($publishingStartDt instanceof \DateTime) {
            $this->publishingStartDt = $publishingStartDt;
        } elseif (is_string($publishingStartDt)) {
            $this->publishingStartDt = new \DateTime($publishingStartDt);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return releaseDt
     *
     * @return \DateTime
     */
    public function getReleaseDt(): \DateTime
    {
        return $this->releaseDt;
    }

    /**
     * Set releaseDt
     *
     * @param \DateTime|string $releaseDt
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setReleaseDt($releaseDt)
    {
        if ($releaseDt instanceof \DateTime) {
            $this->releaseDt = $releaseDt;
        } elseif (is_string($releaseDt)) {
            $this->releaseDt = new \DateTime($releaseDt);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return releaseDtText
     *
     * @return string|null
     */
    public function getReleaseDtText(): ?string
    {
        return $this->releaseDtText;
    }

    /**
     * Set releaseDtText
     *
     * @param string|null $releaseDtText
     * @return void
     */
    public function setReleaseDtText(?string $releaseDtText)
    {
        $this->releaseDtText = $releaseDtText;
    }

    /**
     * Return isSalesEnd
     *
     * @return boolean
     */
    public function getIsSalesEnd(): bool
    {
        return $this->isSalesEnd;
    }

    /**
     * Is salse end
     *
     * alias getIsSalesEnd()
     *
     * @return boolean
     */
    public function isSalseEnd(): bool
    {
        return $this->getIsSalesEnd();
    }

    /**
     * Set isSalesEnd
     *
     * @param boolean $isSalesEnd
     * @return void
     */
    public function setIsSalesEnd(bool $isSalesEnd)
    {
        $this->isSalesEnd = $isSalesEnd;
    }

    /**
     * Return type
     *
     * @return integer
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return void
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }

    /**
     * Return priceText
     *
     * @return string|null
     */
    public function getPriceText(): ?string
    {
        return $this->priceText;
    }

    /**
     * Set priceText
     *
     * @param string|null $priceText
     * @return void
     */
    public function setPriceText(?string $priceText)
    {
        $this->priceText = $priceText;
    }

    /**
     * Return specialGift
     *
     * @return string|null
     */
    public function getSpecialGift(): ?string
    {
        return $this->specialGift;
    }

    /**
     * Set specialGift
     *
     * @param string|null $specialGift
     * @return void
     */
    public function setSpecialGift(?string $specialGift)
    {
        $this->specialGift = $specialGift;
    }

    /**
     * Return specialGiftStock
     *
     * @return integer|null
     */
    public function getSpecialGiftStock(): ?int
    {
        return $this->specialGiftStock;
    }

    /**
     * Set specialGiftStock
     *
     * @param integer|null $specialGiftStock
     * @return void
     */
    public function setSpecialGiftStock(?int $specialGiftStock)
    {
        $this->specialGiftStock = $specialGiftStock;
    }

    /**
     * Return specialGiftImage
     *
     * @return File|null
     */
    public function getSpecialGiftImage(): ?File
    {
        return $this->specialGiftImage;
    }

    /**
     * Set specialGiftImage
     *
     * @param File|null $specialGiftImage
     * @return void
     */
    public function setSpecialGiftImage(?File $specialGiftImage)
    {
        $this->specialGiftImage = $specialGiftImage;
    }
}
