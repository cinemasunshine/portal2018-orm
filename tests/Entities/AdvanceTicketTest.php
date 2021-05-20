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
 * @coversDefaultClass \Cinemasunshine\ORM\Entities\AdvanceTicket
 */
final class AdvanceTicketTest extends TestCase
{
    /** @var AdvanceTicket */
    private $advanceTicket;

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
     * @before
     */
    public function setUp(): void
    {
        $this->advanceTicket = new AdvanceTicket();
    }

    /**
     * @covers ::getId
     * @test
     * @testdox getIdはプロパティidの値を取得できる
     */
    public function testGetId(): void
    {
        $id = 19;

        $targetRef = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($this->advanceTicket, $id);

        $this->assertEquals($id, $this->advanceTicket->getId());
    }

    /**
     * @covers ::getAdvanceSale
     * @test
     * @testdox getAdvanceSaleはプロパティadvanceSaleの値を取得できる
     */
    public function testGetAdvanceSale(): void
    {
        $advanceSale = new AdvanceSale();

        $targetRef = $this->createTargetReflection();

        $advanceSalePropertyRef = $targetRef->getProperty('advanceSale');
        $advanceSalePropertyRef->setAccessible(true);
        $advanceSalePropertyRef->setValue($this->advanceTicket, $advanceSale);

        $this->assertEquals($advanceSale, $this->advanceTicket->getAdvanceSale());
    }

    /**
     * @covers ::setAdvanceSale
     * @test
     * @testdox setAdvanceSaleはプロパティadvanceSaleにAdvanceSaleオブジェクトをセットできる
     */
    public function testSetAdvanceSale(): void
    {
        $advanceSale = new AdvanceSale();

        $this->advanceTicket->setAdvanceSale($advanceSale);

        $targetRef = $this->createTargetReflection();

        $advanceSalePropertyRef = $targetRef->getProperty('advanceSale');
        $advanceSalePropertyRef->setAccessible(true);

        $this->assertEquals($advanceSale, $advanceSalePropertyRef->getValue($this->advanceTicket));
    }

    /**
     * @covers ::getPublishingStartDt
     * @test
     * @testdox getPublishingStartDtはプロパティpublishingStartDtの値を取得できる
     */
    public function testGetPublishingStartDt(): void
    {
        $publishingStartDt = new DateTime();

        $targetRef = $this->createTargetReflection();

        $publishingStartDtPropertyRef = $targetRef->getProperty('publishingStartDt');
        $publishingStartDtPropertyRef->setAccessible(true);
        $publishingStartDtPropertyRef->setValue($this->advanceTicket, $publishingStartDt);

        $this->assertEquals($publishingStartDt, $this->advanceTicket->getPublishingStartDt());
    }

    /**
     * @return array<string,array<int,mixed>>
     */
    public function getValidPublishingStartDtDataProvider(): array
    {
        $date = '2020-01-01';

        return [
            'type DateTime' => [
                new DateTime($date),
                $date,
            ],
            'type string' => [
                $date,
                $date,
            ],
        ];
    }

    /**
     * @covers ::setPublishingStartDt
     * @dataProvider getValidPublishingStartDtDataProvider
     * @test
     * @testdox setPublishingStartDtはプロパティpublishingStartDtに日付をセットできる
     *
     * @param mixed $value
     */
    public function testSetPublishingStartDtCaseSetValidValue($value, string $date): void
    {
        $targetRef = $this->createTargetReflection();

        $publishingStartDtPropertyRef = $targetRef->getProperty('publishingStartDt');
        $publishingStartDtPropertyRef->setAccessible(true);

        $this->advanceTicket->setPublishingStartDt($value);

        $propertValue = $publishingStartDtPropertyRef->getValue($this->advanceTicket);

        $this->assertInstanceOf(DateTime::class, $propertValue);

        $this->assertEquals($date, $propertValue->format('Y-m-d'));
    }

    /**
     * @return array<string,array<mixed>>
     */
    public function getInvalidPublishingStartDtDataProvider(): array
    {
        return [
            'type int' => [20210101],
            'type array' => [['2021-01-01']],
            'type null' => [null],
        ];
    }

    /**
     * @covers ::setPublishingStartDt
     * @dataProvider getInvalidPublishingStartDtDataProvider
     * @test
     * @testdox setPublishingStartDtは無効な値をセットできない
     *
     * @param mixed $value
     */
    public function testSetPublishingStartDtCaseInvalidValue($value): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->advanceTicket->setPublishingStartDt($value);
    }

    /**
     * @covers ::getReleaseDt
     * @test
     * @testdox getReleaseDtはプロパティreleaseDtの値を取得できる
     */
    public function testGetReleaseDt(): void
    {
        $releaseDt = new DateTime();

        $targetRef = $this->createTargetReflection();

        $releaseDtPropertyRef = $targetRef->getProperty('releaseDt');
        $releaseDtPropertyRef->setAccessible(true);
        $releaseDtPropertyRef->setValue($this->advanceTicket, $releaseDt);

        $this->assertEquals($releaseDt, $this->advanceTicket->getReleaseDt());
    }

    /**
     * @return array<string,array<int,mixed>>
     */
    public function getValidReleaseDtDataProvider(): array
    {
        $data = '2020-01-01';

        return [
            'type DateTime' => [
                new DateTime($data),
                $data,
            ],
            'type string' => [
                $data,
                $data,
            ],
        ];
    }

    /**
     * @covers ::setReleaseDt
     * @dataProvider getValidReleaseDtDataProvider
     * @test
     * @testdox setReleaseDtはプロパティreleaseDtに日付をセットできる
     *
     * @param mixed $value
     */
    public function testSetReleaseDtCaseValidValue($value, string $date): void
    {
        $targetRef = $this->createTargetReflection();

        $releaseDtPropertyRef = $targetRef->getProperty('releaseDt');
        $releaseDtPropertyRef->setAccessible(true);

        $this->advanceTicket->setReleaseDt($value);

        $propertValue = $releaseDtPropertyRef->getValue($this->advanceTicket);

        $this->assertInstanceOf(DateTime::class, $propertValue);

        $this->assertEquals($date, $propertValue->format('Y-m-d'));
    }

    /**
     * @return array<string,array<mixed>>
     */
    public function getInvalidReleaseDtDataProvider(): array
    {
        return [
            'type int' => [20210101],
            'type array' => [['2021-01-01']],
            'type null' => [null],
        ];
    }

    /**
     * @covers ::setReleaseDt
     * @dataProvider getInvalidReleaseDtDataProvider
     * @test
     * @testdox setReleaseDtは無効な値をセットできない
     *
     * @param mixed $value
     */
    public function testSetReleaseDtCaseInvalidValue($value): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->advanceTicket->setReleaseDt($value);
    }

    /**
     * @covers ::getReleaseDtText
     * @test
     * @testdox getReleaseDtTextはプロパティreleaseDtTextの値を取得できる
     */
    public function testGetReleaseDtText(): void
    {
        $releaseDtText = 'release_dt_text';

        $targetRef = $this->createTargetReflection();

        $releaseDtTextPropertyRef = $targetRef->getProperty('releaseDtText');
        $releaseDtTextPropertyRef->setAccessible(true);
        $releaseDtTextPropertyRef->setValue($this->advanceTicket, $releaseDtText);

        $this->assertEquals($releaseDtText, $this->advanceTicket->getReleaseDtText());
    }

    /**
     * @return array<string,array<mixed>>
     */
    public function getReleaseDtDataProvider(): array
    {
        return [
            'type string' => ['release_dt_text'],
            'type null' => [null],
        ];
    }

    /**
     * @covers ::setReleaseDtText
     * @dataProvider getReleaseDtDataProvider
     * @test
     * @testdox setReleaseDtTextはプロパティreleaseDtTextに値をセットできる
     *
     * @param mixed $value
     */
    public function testSetReleaseDtText($value): void
    {
        $this->advanceTicket->setReleaseDtText($value);

        $targetRef = $this->createTargetReflection();

        $releaseDtTextPropertyRef = $targetRef->getProperty('releaseDtText');
        $releaseDtTextPropertyRef->setAccessible(true);

        $this->assertEquals($value, $releaseDtTextPropertyRef->getValue($this->advanceTicket));
    }

    /**
     * @covers ::getIsSalesEnd
     * @test
     * @testdox getIsSalesEndはプロパティisSalesEndの値を取得できる
     */
    public function testGetIsSalesEnd(): void
    {
        $isSalesEnd = true;

        $targetRef = $this->createTargetReflection();

        $isSalesEndPropertyRef = $targetRef->getProperty('isSalesEnd');
        $isSalesEndPropertyRef->setAccessible(true);
        $isSalesEndPropertyRef->setValue($this->advanceTicket, $isSalesEnd);

        $this->assertEquals($isSalesEnd, $this->advanceTicket->getIsSalesEnd());
    }

    /**
     * @covers ::isSalseEnd
     * @test
     * @testdox isSalseEndはgetIsSalesEndを実行し、その結果を返す
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
     * @covers ::setIsSalesEnd
     * @test
     * @testdox setIsSalesEndはプロパティisSalesEndにBool値をセットできる
     */
    public function testSetIsSalesEnd(): void
    {
        $isSalesEnd = true;

        $this->advanceTicket->setIsSalesEnd($isSalesEnd);

        $targetRef = $this->createTargetReflection();

        $isSalesEndPropertyRef = $targetRef->getProperty('isSalesEnd');
        $isSalesEndPropertyRef->setAccessible(true);

        $this->assertEquals($isSalesEnd, $isSalesEndPropertyRef->getValue($this->advanceTicket));
    }

    /**
     * @covers ::getType
     * @test
     * @testdox getTypeはプロパティtypeの値を取得できる
     */
    public function testGetType(): void
    {
        $type = 3;

        $targetRef = $this->createTargetReflection();

        $typePropertyRef = $targetRef->getProperty('type');
        $typePropertyRef->setAccessible(true);
        $typePropertyRef->setValue($this->advanceTicket, $type);

        $this->assertEquals($type, $this->advanceTicket->getType());
    }

    /**
     * @covers ::setType
     * @test
     * @testdox setTypeはプロパティtypeに整数をセットできる
     */
    public function testSetType(): void
    {
        $type = 3;

        $this->advanceTicket->setType($type);

        $targetRef = $this->createTargetReflection();

        $typePropertyRef = $targetRef->getProperty('type');
        $typePropertyRef->setAccessible(true);

        $this->assertEquals($type, $typePropertyRef->getValue($this->advanceTicket));
    }

    /**
     * @covers ::getPriceText
     * @test
     * @testdox getPriceTextはプロパティpriceTextの値を取得できる
     */
    public function testGetPriceText(): void
    {
        $priceText = '2,500';

        $targetRef = $this->createTargetReflection();

        $priceTextPropertyRef = $targetRef->getProperty('priceText');
        $priceTextPropertyRef->setAccessible(true);
        $priceTextPropertyRef->setValue($this->advanceTicket, $priceText);

        $this->assertEquals($priceText, $this->advanceTicket->getPriceText());
    }

    /**
     * @return array<string,array<mixed>>
     */
    public function getPriceTextDataProvider(): array
    {
        return [
            'type string' => ['2,500'],
            'type null' => [null],
        ];
    }

    /**
     * @covers ::setPriceText
     * @dataProvider getPriceTextDataProvider
     * @test
     * @testdox setPriceTextはプロパティpriceTextに値をセットできる
     *
     * @param mixed $value
     */
    public function testSetPriceText($value): void
    {
        $this->advanceTicket->setPriceText($value);

        $targetRef = $this->createTargetReflection();

        $priceTextPropertyRef = $targetRef->getProperty('priceText');
        $priceTextPropertyRef->setAccessible(true);

        $this->assertEquals($value, $priceTextPropertyRef->getValue($this->advanceTicket));
    }

    /**
     * @covers ::getDetailUrl
     * @test
     * @testdox getDetailUrlはプロパティdetailUrlの値を取得できる
     */
    public function testGetDetailUrl(): void
    {
        $detailUrl = 'https://example.com';

        $targetRef = $this->createTargetReflection();

        $detailUrlPropertyRef = $targetRef->getProperty('detailUrl');
        $detailUrlPropertyRef->setAccessible(true);
        $detailUrlPropertyRef->setValue($this->advanceTicket, $detailUrl);

        $this->assertEquals($detailUrl, $this->advanceTicket->getDetailUrl());
    }

    /**
     * @return array<string,array<mixed>>
     */
    public function getDetailUrlDataProvider(): array
    {
        return [
            'type string' => ['https://example.com'],
            'type null' => [null],
        ];
    }

    /**
     * @covers ::setDetailUrl
     * @dataProvider getDetailUrlDataProvider
     * @test
     * @testdox setDetailUrlはプロパティdetailUrlに値をセットできる
     *
     * @param mixed $value
     */
    public function testSetDetailUrl($value): void
    {
        $this->advanceTicket->setDetailUrl($value);

        $targetRef = $this->createTargetReflection();

        $detailUrlPropertyRef = $targetRef->getProperty('detailUrl');
        $detailUrlPropertyRef->setAccessible(true);

        $this->assertEquals($value, $detailUrlPropertyRef->getValue($this->advanceTicket));
    }

    /**
     * @covers ::getSpecialGift
     * @test
     * @testdox getSpecialGiftはプロパティspecialGiftの値を取得できる
     */
    public function testGetSpecialGift(): void
    {
        $specialGift = 'special_gift';

        $targetRef = $this->createTargetReflection();

        $specialGiftPropertyRef = $targetRef->getProperty('specialGift');
        $specialGiftPropertyRef->setAccessible(true);
        $specialGiftPropertyRef->setValue($this->advanceTicket, $specialGift);

        $this->assertEquals($specialGift, $this->advanceTicket->getSpecialGift());
    }

    /**
     * @return array<string,array<mixed>>
     */
    public function getSpecialGiftDataProvider(): array
    {
        return [
            'type string' => ['special_gift'],
            'type null' => [null],
        ];
    }

    /**
     * @covers ::setSpecialGift
     * @dataProvider getSpecialGiftDataProvider
     * @test
     * @testdox setSpecialGiftはプロパティspecialGiftに値をセットできる
     *
     * @param mixed $value
     */
    public function testSetSpecialGift($value): void
    {
        $this->advanceTicket->setSpecialGift($value);

        $targetRef = $this->createTargetReflection();

        $specialGiftPropertyRef = $targetRef->getProperty('specialGift');
        $specialGiftPropertyRef->setAccessible(true);

        $this->assertEquals($value, $specialGiftPropertyRef->getValue($this->advanceTicket));
    }

    /**
     * @covers ::getSpecialGiftStock
     * @test
     * @testdox getSpecialGiftStockはプロパティspecialGiftStockの値を取得できる
     */
    public function testGetSpecialGiftStock(): void
    {
        $specialGiftStock = 4;

        $targetRef = $this->createTargetReflection();

        $specialGiftStockPropertyRef = $targetRef->getProperty('specialGiftStock');
        $specialGiftStockPropertyRef->setAccessible(true);
        $specialGiftStockPropertyRef->setValue($this->advanceTicket, $specialGiftStock);

        $this->assertEquals($specialGiftStock, $this->advanceTicket->getSpecialGiftStock());
    }

    /**
     * @return array<string,array<mixed>>
     */
    public function getSpecialGiftStockDataProvider(): array
    {
        return [
            'type string' => [4],
            'type null' => [null],
        ];
    }

    /**
     * @covers ::setSpecialGiftStock
     * @dataProvider getSpecialGiftStockDataProvider
     * @test
     * @testdox setSpecialGiftStockはプロパティspecialGiftStockに値をセットできる
     *
     * @param mixed $value
     */
    public function testSetSpecialGiftStock($value): void
    {
        $this->advanceTicket->setSpecialGiftStock($value);

        $targetRef = $this->createTargetReflection();

        $specialGiftStockPropertyRef = $targetRef->getProperty('specialGiftStock');
        $specialGiftStockPropertyRef->setAccessible(true);

        $this->assertEquals($value, $specialGiftStockPropertyRef->getValue($this->advanceTicket));
    }

    /**
     * @covers ::getSpecialGiftImage
     * @test
     * @testdox getSpecialGiftImageはプロパティspecialGiftImageの値を取得できる
     */
    public function testGetSpecialGiftImage(): void
    {
        $specialGiftImage = new File();

        $targetRef = $this->createTargetReflection();

        $specialGiftImagePropertyRef = $targetRef->getProperty('specialGiftImage');
        $specialGiftImagePropertyRef->setAccessible(true);
        $specialGiftImagePropertyRef->setValue($this->advanceTicket, $specialGiftImage);

        $this->assertEquals($specialGiftImage, $this->advanceTicket->getSpecialGiftImage());
    }

    /**
     * @return array<string,array<mixed>>
     */
    public function getSpecialGiftImageDataProvider(): array
    {
        return [
            'type File' => [new File()],
            'type null' => [null],
        ];
    }

    /**
     * @covers ::setSpecialGiftImage
     * @dataProvider getSpecialGiftImageDataProvider
     * @test
     * @testdox setSpecialGiftImageはプロパティspecialGiftImageに値をセットできる
     *
     * @param mixed $value
     */
    public function testSetSpecialGiftImage($value): void
    {
        $this->advanceTicket->setSpecialGiftImage($value);

        $targetRef = $this->createTargetReflection();

        $specialGiftImagePropertyRef = $targetRef->getProperty('specialGiftImage');
        $specialGiftImagePropertyRef->setAccessible(true);

        $this->assertEquals($value, $specialGiftImagePropertyRef->getValue($this->advanceTicket));
    }
}
