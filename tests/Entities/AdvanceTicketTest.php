<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\AdvanceSale;
use Cinemasunshine\ORM\Entities\AdvanceTicket;
use Cinemasunshine\ORM\Entities\File;
use DateTime;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class AdvanceTicketTest extends TestCase
{
    /**
     * @return AdvanceTicket&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(AdvanceTicket::class);
    }

    /**
     * @param string[] $methods
     * @return AdvanceTicket&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(AdvanceTicket::class, $methods);
    }

    /**
     * @return ReflectionClass<AdvanceTicket>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(AdvanceTicket::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 19;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * @test
     */
    public function testGetAdvanceSale(): void
    {
        $advanceSale = new AdvanceSale();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $advanceSalePropertyRef = $targetRef->getProperty('advanceSale');
        $advanceSalePropertyRef->setAccessible(true);
        $advanceSalePropertyRef->setValue($targetMock, $advanceSale);

        $this->assertEquals($advanceSale, $targetMock->getAdvanceSale());
    }

    /**
     * @test
     */
    public function testSetAdvanceSale(): void
    {
        $advanceSale = new AdvanceSale();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setAdvanceSale($advanceSale);

        $targetRef = $this->createTargetReflection();

        $advanceSalePropertyRef = $targetRef->getProperty('advanceSale');
        $advanceSalePropertyRef->setAccessible(true);

        $this->assertEquals($advanceSale, $advanceSalePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetPublishingStartDt(): void
    {
        $publishingStartDt = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publishingStartDtPropertyRef = $targetRef->getProperty('publishingStartDt');
        $publishingStartDtPropertyRef->setAccessible(true);
        $publishingStartDtPropertyRef->setValue($targetMock, $publishingStartDt);

        $this->assertEquals($publishingStartDt, $targetMock->getPublishingStartDt());
    }

    /**
     * @test
     */
    public function testSetPublishingStartDt(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publishingStartDtPropertyRef = $targetRef->getProperty('publishingStartDt');
        $publishingStartDtPropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setPublishingStartDt($dtObject);
        $this->assertEquals($dtObject, $publishingStartDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setPublishingStartDt($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $publishingStartDtPropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $publishingStartDtPropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setPublishingStartDt (invalid argument)
     *
     * @test
     */
    public function testSetPublishingStartDtInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublishingStartDt(null);
    }

    /**
     * @test
     */
    public function testGetReleaseDt(): void
    {
        $releaseDt = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $releaseDtPropertyRef = $targetRef->getProperty('releaseDt');
        $releaseDtPropertyRef->setAccessible(true);
        $releaseDtPropertyRef->setValue($targetMock, $releaseDt);

        $this->assertEquals($releaseDt, $targetMock->getReleaseDt());
    }

    /**
     * @test
     */
    public function testSetReleaseDt(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $releaseDtPropertyRef = $targetRef->getProperty('releaseDt');
        $releaseDtPropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setReleaseDt($dtObject);
        $this->assertEquals($dtObject, $releaseDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setReleaseDt($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $releaseDtPropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $releaseDtPropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setReleaseDt (invalid argument)
     *
     * @test
     */
    public function testSetReleaseDtInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setReleaseDt(null);
    }

    /**
     * @test
     */
    public function testGetReleaseDtText(): void
    {
        $releaseDtText = 'release_dt_text';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $releaseDtTextPropertyRef = $targetRef->getProperty('releaseDtText');
        $releaseDtTextPropertyRef->setAccessible(true);
        $releaseDtTextPropertyRef->setValue($targetMock, $releaseDtText);

        $this->assertEquals($releaseDtText, $targetMock->getReleaseDtText());
    }

    /**
     * @test
     */
    public function testSetReleaseDtText(): void
    {
        $releaseDtText = 'release_dt_text';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setReleaseDtText($releaseDtText);

        $targetRef = $this->createTargetReflection();

        $releaseDtTextPropertyRef = $targetRef->getProperty('releaseDtText');
        $releaseDtTextPropertyRef->setAccessible(true);

        $this->assertEquals($releaseDtText, $releaseDtTextPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetIsSalesEnd(): void
    {
        $isSalesEnd = true;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $isSalesEndPropertyRef = $targetRef->getProperty('isSalesEnd');
        $isSalesEndPropertyRef->setAccessible(true);
        $isSalesEndPropertyRef->setValue($targetMock, $isSalesEnd);

        $this->assertEquals($isSalesEnd, $targetMock->getIsSalesEnd());
    }

    /**
     * @test
     */
    public function testIsSalseEnd(): void
    {
        $isSalesEnd = true;

        $targetMock = $this->createTargetPartialMock(['getIsSalesEnd']);
        $targetMock
            ->expects($this->once())
            ->method('getIsSalesEnd')
            ->willReturn($isSalesEnd);

        $this->assertEquals($isSalesEnd, $targetMock->isSalseEnd());
    }

    /**
     * @test
     */
    public function testSetIsSalesEnd(): void
    {
        $isSalesEnd = true;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setIsSalesEnd($isSalesEnd);

        $targetRef = $this->createTargetReflection();

        $isSalesEndPropertyRef = $targetRef->getProperty('isSalesEnd');
        $isSalesEndPropertyRef->setAccessible(true);

        $this->assertEquals($isSalesEnd, $isSalesEndPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetType(): void
    {
        $type = 3;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $typePropertyRef = $targetRef->getProperty('type');
        $typePropertyRef->setAccessible(true);
        $typePropertyRef->setValue($targetMock, $type);

        $this->assertEquals($type, $targetMock->getType());
    }

    /**
     * @test
     */
    public function testSetType(): void
    {
        $type = 3;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setType($type);

        $targetRef = $this->createTargetReflection();

        $typePropertyRef = $targetRef->getProperty('type');
        $typePropertyRef->setAccessible(true);

        $this->assertEquals($type, $typePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetPriceText(): void
    {
        $priceText = '2,500';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $priceTextPropertyRef = $targetRef->getProperty('priceText');
        $priceTextPropertyRef->setAccessible(true);
        $priceTextPropertyRef->setValue($targetMock, $priceText);

        $this->assertEquals($priceText, $targetMock->getPriceText());
    }

    /**
     * @test
     */
    public function testSetPriceText(): void
    {
        $priceText = '2,500';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setPriceText($priceText);

        $targetRef = $this->createTargetReflection();

        $priceTextPropertyRef = $targetRef->getProperty('priceText');
        $priceTextPropertyRef->setAccessible(true);

        $this->assertEquals($priceText, $priceTextPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetSpecialGift(): void
    {
        $specialGift = 'special_gift';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialGiftPropertyRef = $targetRef->getProperty('specialGift');
        $specialGiftPropertyRef->setAccessible(true);
        $specialGiftPropertyRef->setValue($targetMock, $specialGift);

        $this->assertEquals($specialGift, $targetMock->getSpecialGift());
    }

    /**
     * @test
     */
    public function testSetSpecialGift(): void
    {
        $specialGift = 'special_gift';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSpecialGift($specialGift);

        $targetRef = $this->createTargetReflection();

        $specialGiftPropertyRef = $targetRef->getProperty('specialGift');
        $specialGiftPropertyRef->setAccessible(true);

        $this->assertEquals($specialGift, $specialGiftPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetSpecialGiftStock(): void
    {
        $specialGiftStock = 4;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialGiftStockPropertyRef = $targetRef->getProperty('specialGiftStock');
        $specialGiftStockPropertyRef->setAccessible(true);
        $specialGiftStockPropertyRef->setValue($targetMock, $specialGiftStock);

        $this->assertEquals($specialGiftStock, $targetMock->getSpecialGiftStock());
    }

    /**
     * @test
     */
    public function testSetSpecialGiftStock(): void
    {
        $specialGiftStock = 4;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSpecialGiftStock($specialGiftStock);

        $targetRef = $this->createTargetReflection();

        $specialGiftStockPropertyRef = $targetRef->getProperty('specialGiftStock');
        $specialGiftStockPropertyRef->setAccessible(true);

        $this->assertEquals($specialGiftStock, $specialGiftStockPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetSpecialGiftImage(): void
    {
        $specialGiftImage = new File();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialGiftImagePropertyRef = $targetRef->getProperty('specialGiftImage');
        $specialGiftImagePropertyRef->setAccessible(true);
        $specialGiftImagePropertyRef->setValue($targetMock, $specialGiftImage);

        $this->assertEquals($specialGiftImage, $targetMock->getSpecialGiftImage());
    }

    /**
     * @test
     */
    public function testSetSpecialGiftImage(): void
    {
        $specialGiftImage = new File();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSpecialGiftImage($specialGiftImage);

        $targetRef = $this->createTargetReflection();

        $specialGiftImagePropertyRef = $targetRef->getProperty('specialGiftImage');
        $specialGiftImagePropertyRef->setAccessible(true);

        $this->assertEquals($specialGiftImage, $specialGiftImagePropertyRef->getValue($targetMock));
    }
}
