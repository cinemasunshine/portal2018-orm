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

/**
 * AdvanceTicket test
 */
final class AdvanceTicketTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return AdvanceTicket&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(AdvanceTicket::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return AdvanceTicket&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(AdvanceTicket::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return ReflectionClass<AdvanceTicket>
     */
    public function createTargetReflection()
    {
        return new ReflectionClass(AdvanceTicket::class);
    }

    /**
     * test getId
     *
     * @test
     *
     * @return void
     */
    public function testGetId()
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
     * test getAdvanceSale
     *
     * @test
     *
     * @return void
     */
    public function testGetAdvanceSale()
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
     * test setAdvanceSale
     *
     * @test
     *
     * @return void
     */
    public function testSetAdvanceSale()
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
     * test getPublishingStartDt
     *
     * @test
     *
     * @return void
     */
    public function testGetPublishingStartDt()
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
     * test setPublishingStartDt
     *
     * @test
     *
     * @return void
     */
    public function testSetPublishingStartDt()
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
     *
     * @return void
     */
    public function testSetPublishingStartDtInvalidArgument()
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublishingStartDt(null);
    }

    /**
     * test getReleaseDt
     *
     * @test
     *
     * @return void
     */
    public function testGetReleaseDt()
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
     * test setReleaseDt
     *
     * @test
     *
     * @return void
     */
    public function testSetReleaseDt()
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
     *
     * @return void
     */
    public function testSetReleaseDtInvalidArgument()
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setReleaseDt(null);
    }

    /**
     * test getReleaseDtText
     *
     * @test
     *
     * @return void
     */
    public function testGetReleaseDtText()
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
     * test setReleaseDtText
     *
     * @test
     *
     * @return void
     */
    public function testSetReleaseDtText()
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
     * test getIsSalesEnd
     *
     * @test
     *
     * @return void
     */
    public function testGetIsSalesEnd()
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
     * test isSalseEnd
     *
     * @test
     *
     * @return void
     */
    public function testIsSalseEnd()
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
     * test setIsSalesEnd
     *
     * @test
     *
     * @return void
     */
    public function testSetIsSalesEnd()
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
     * test getType
     *
     * @test
     *
     * @return void
     */
    public function testGetType()
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
     * test setType
     *
     * @test
     *
     * @return void
     */
    public function testSetType()
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
     * test getPriceText
     *
     * @test
     *
     * @return void
     */
    public function testGetPriceText()
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
     * test setPriceText
     *
     * @test
     *
     * @return void
     */
    public function testSetPriceText()
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
     * test getSpecialGift
     *
     * @test
     *
     * @return void
     */
    public function testGetSpecialGift()
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
     * test setSpecialGift
     *
     * @test
     *
     * @return void
     */
    public function testSetSpecialGift()
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
     * test getSpecialGiftStock
     *
     * @test
     *
     * @return void
     */
    public function testGetSpecialGiftStock()
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
     * test setSpecialGiftStock
     *
     * @test
     *
     * @return void
     */
    public function testSetSpecialGiftStock()
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
     * test getSpecialGiftImage
     *
     * @test
     *
     * @return void
     */
    public function testGetSpecialGiftImage()
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
     * test setSpecialGiftImage
     *
     * @test
     *
     * @return void
     */
    public function testSetSpecialGiftImage()
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
