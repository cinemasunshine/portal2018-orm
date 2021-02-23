<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use Cinemasunshine\ORM\Entities\Traits\SoftDeleteTrait;
use Cinemasunshine\ORM\Entities\Traits\TimestampableTrait;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use InvalidArgumentException;

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
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="AdvanceSale", inversedBy="advanceTickets")
     * @ORM\JoinColumn(name="advance_sale_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     *
     * @var AdvanceSale
     */
    protected $advanceSale;

    /**
     * @ORM\Column(type="datetime", name="publishing_start_dt")
     *
     * @var DateTime
     */
    protected $publishingStartDt;

    /**
     * @ORM\Column(type="datetime", name="release_dt")
     *
     * @var DateTime
     */
    protected $releaseDt;

    /**
     * @ORM\Column(type="string", name="release_dt_text", nullable=true)
     *
     * @var string|null
     */
    protected $releaseDtText;

    /**
     * @ORM\Column(type="boolean", name="is_sales_end", options={"default":false})
     *
     * @var bool
     */
    protected $isSalesEnd;

    /**
     * @ORM\Column(type="smallint", options={"unsigned"=true})
     *
     * @var int
     */
    protected $type;

    /**
     * @ORM\Column(type="string", name="price_text", nullable=true)
     *
     * @var string|null
     */
    protected $priceText;

    /**
     * @ORM\Column(type="string", name="special_gift", nullable=true)
     *
     * @var string|null
     */
    protected $specialGift;

    /**
     * @ORM\Column(type="smallint", name="special_gift_stock", nullable=true, options={"unsigned"=true})
     *
     * @var int|null
     */
    protected $specialGiftStock;

    /**
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="special_gift_image", referencedColumnName="id", nullable=true, onDelete="RESTRICT")
     *
     * @var File|null
     */
    protected $specialGiftImage;

    public function getId(): int
    {
        return $this->id;
    }

    public function getAdvanceSale(): AdvanceSale
    {
        return $this->advanceSale;
    }

    public function setAdvanceSale(AdvanceSale $advanceSale): void
    {
        $this->advanceSale = $advanceSale;
    }

    public function getPublishingStartDt(): DateTime
    {
        return $this->publishingStartDt;
    }

    /**
     * @param DateTime|string $publishingStartDt
     *
     * @throws InvalidArgumentException
     */
    public function setPublishingStartDt($publishingStartDt): void
    {
        if ($publishingStartDt instanceof DateTime) {
            $this->publishingStartDt = $publishingStartDt;
        } elseif (is_string($publishingStartDt)) {
            $this->publishingStartDt = new DateTime($publishingStartDt);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getReleaseDt(): DateTime
    {
        return $this->releaseDt;
    }

    /**
     * @param DateTime|string $releaseDt
     *
     * @throws InvalidArgumentException
     */
    public function setReleaseDt($releaseDt): void
    {
        if ($releaseDt instanceof DateTime) {
            $this->releaseDt = $releaseDt;
        } elseif (is_string($releaseDt)) {
            $this->releaseDt = new DateTime($releaseDt);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getReleaseDtText(): ?string
    {
        return $this->releaseDtText;
    }

    public function setReleaseDtText(?string $releaseDtText): void
    {
        $this->releaseDtText = $releaseDtText;
    }

    public function getIsSalesEnd(): bool
    {
        return $this->isSalesEnd;
    }

    /**
     * alias getIsSalesEnd()
     */
    public function isSalseEnd(): bool
    {
        return $this->getIsSalesEnd();
    }

    public function setIsSalesEnd(bool $isSalesEnd): void
    {
        $this->isSalesEnd = $isSalesEnd;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getPriceText(): ?string
    {
        return $this->priceText;
    }

    public function setPriceText(?string $priceText): void
    {
        $this->priceText = $priceText;
    }

    public function getSpecialGift(): ?string
    {
        return $this->specialGift;
    }

    public function setSpecialGift(?string $specialGift): void
    {
        $this->specialGift = $specialGift;
    }

    public function getSpecialGiftStock(): ?int
    {
        return $this->specialGiftStock;
    }

    public function setSpecialGiftStock(?int $specialGiftStock): void
    {
        $this->specialGiftStock = $specialGiftStock;
    }

    public function getSpecialGiftImage(): ?File
    {
        return $this->specialGiftImage;
    }

    public function setSpecialGiftImage(?File $specialGiftImage): void
    {
        $this->specialGiftImage = $specialGiftImage;
    }
}
