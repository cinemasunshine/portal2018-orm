<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Title;
use Cinemasunshine\ORM\Entities\TitleRanking;
use DateTime;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @coversDefaultClass \Cinemasunshine\ORM\Entities\TitleRanking
 */
final class TitleRankingTest extends TestCase
{
    /** @var TitleRanking */
    protected $titleRanking;

    /**
     * @return TitleRanking&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(TitleRanking::class);
    }

    /**
     * @param string[] $methods
     * @return TitleRanking&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TitleRanking::class, $methods);
    }

    /**
     * @return ReflectionClass<TitleRanking>
     */
    protected function createTitleRankingReflection(): ReflectionClass
    {
        return new ReflectionClass(TitleRanking::class);
    }

    /**
     * @before
     */
    public function setUp(): void
    {
        $this->titleRanking = new TitleRanking();
    }

    /**
     * @covers ::getId
     * @test
     * @testdox getIdはプロパティidの値を返す
     */
    public function testGetId(): void
    {
        $id = 13;

        $titleRankingRef = $this->createTitleRankingReflection();

        $idPropertyRef = $titleRankingRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($this->titleRanking, $id);

        $this->assertEquals($id, $this->titleRanking->getId());
    }

    /**
     * @covers ::getFromDate
     * @test
     * @testdox getFromDateはプロパティfromDateの値を返す
     */
    public function testGetFromDate(): void
    {
        $fromDate = new DateTime();

        $titleRankingRef = $this->createTitleRankingReflection();

        $fromDatePropertyRef = $titleRankingRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);
        $fromDatePropertyRef->setValue($this->titleRanking, $fromDate);

        $this->assertEquals($fromDate, $this->titleRanking->getFromDate());
    }

    /**
     * @return array<string,array{mixed,?string}>
     */
    public function setFromDateDataProvider(): array
    {
        $date = '2021-06-01';

        return [
            'set null' => [null, null],
            'set string' => [$date, $date],
            'set DateTime' => [new DateTime($date), $date],
        ];
    }

    /**
     * @covers ::setFromDate
     * @dataProvider setFromDateDataProvider
     * @test
     * @testdox setFromDateはプロパティfromDateにDateTimeオブジェクトかnullをセットする
     *
     * @param mixed $arg
     */
    public function testSetFromDateCaseValidArgument($arg, ?string $date): void
    {
        $titleRankingRef = $this->createTitleRankingReflection();

        $fromDatePropertyRef = $titleRankingRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);

        $this->titleRanking->setFromDate($arg);

        $fromDatePropertyValue = $fromDatePropertyRef->getValue($this->titleRanking);

        if (is_null($arg)) {
            $this->assertNull($fromDatePropertyValue);
        } else {
            $this->assertInstanceOf(DateTime::class, $fromDatePropertyValue);
            $this->assertEquals($date, $fromDatePropertyValue->format('Y-m-d'));
        }
    }

    /**
     * @covers ::setFromDate
     * @test
     * @testdox setFromDateは引数が無効な場合、例外をthrowする
     */
    public function testSetFromDateCaseInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        /** @phpstan-ignore-next-line */
        $this->titleRanking->setFromDate(123);
    }

    /**
     * @covers ::getToDate
     * @test
     * @testdox getToDateはプロパティtoDateの値を返す
     */
    public function testGetToDate(): void
    {
        $toDate = new DateTime();

        $titleRankingRef = $this->createTitleRankingReflection();

        $toDatePropertyRef = $titleRankingRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);
        $toDatePropertyRef->setValue($this->titleRanking, $toDate);

        $this->assertEquals($toDate, $this->titleRanking->getToDate());
    }

    /**
     * @return array<string,array{mixed,?string}>
     */
    public function setToDateDataProvider(): array
    {
        $date = '2021-06-01';

        return [
            'set null' => [null, null],
            'set string' => [$date, $date],
            'set DateTime' => [new DateTime($date), $date],
        ];
    }

    /**
     * @covers ::setToDate
     * @dataProvider setToDateDataProvider
     * @test
     * @testdox setToDateはプロパティtoDateにDateTimeオブジェクトかnullをセットする
     *
     * @param mixed $arg
     */
    public function testSetToDate($arg, ?string $date): void
    {
        $titleRankingRef = $this->createTitleRankingReflection();

        $toDatePropertyRef = $titleRankingRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);

        $this->titleRanking->setToDate($arg);

        $toDatePropertyValue = $toDatePropertyRef->getValue($this->titleRanking);

        if (is_null($arg)) {
            $this->assertNull($toDatePropertyValue);
        } else {
            $this->assertInstanceOf(DateTime::class, $toDatePropertyValue);
            $this->assertEquals($date, $toDatePropertyValue->format('Y-m-d'));
        }
    }

    /**
     * @covers ::setToDate
     * @test
     * @testdox setToDateは引数が無効な場合、例外をthrowする
     */
    public function testSetToDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        /** @phpstan-ignore-next-line */
        $this->titleRanking->setToDate(123);
    }

    protected function baseTestGetRankTitle(string $method, string $property): void
    {
        $title = new Title();

        $titleRankingRef = $this->createTitleRankingReflection();

        $propertyRef = $titleRankingRef->getProperty($property);
        $propertyRef->setAccessible(true);
        $propertyRef->setValue($this->titleRanking, $title);

        $this->assertEquals($title, $this->titleRanking->$method());
    }

    protected function baseTestSetRankTitle(string $method, string $property): void
    {
        $title = new Title();

        $this->titleRanking->$method($title);

        $titleRankingRef = $this->createTitleRankingReflection();

        $propertyRef = $titleRankingRef->getProperty($property);
        $propertyRef->setAccessible(true);

        $this->assertEquals($title, $propertyRef->getValue($this->titleRanking));
    }

    /**
     * @covers ::getRank1Title
     * @test
     * @testdox getRank1Titleはプロパティrank1Titleの値を返す
     */
    public function testGetRank1Title(): void
    {
        $this->baseTestGetRankTitle('getRank1Title', 'rank1Title');
    }

    /**
     * @covers ::setRank1Title
     * @test
     * @testdox setRank1Titleはプロパティrank1Titleに引数の値をセットする
     */
    public function testSetRank1Title(): void
    {
        $this->baseTestSetRankTitle('setRank1Title', 'rank1Title');
    }

    /**
     * @covers ::getRank2Title
     * @test
     * @testdox getRank2Titleはプロパティrank2Titleの値を返す
     */
    public function testGetRank2Title(): void
    {
        $this->baseTestGetRankTitle('getRank2Title', 'rank2Title');
    }

    /**
     * @covers ::setRank2Title
     * @test
     * @testdox setRank2Titleはプロパティrank2Titleに引数の値をセットする
     */
    public function testSetRank2Title(): void
    {
        $this->baseTestSetRankTitle('setRank2Title', 'rank2Title');
    }

    /**
     * @covers ::getRank3Title
     * @test
     * @testdox getRank3Titleはプロパティrank3Titleの値を返す
     */
    public function testGetRank3Title(): void
    {
        $this->baseTestGetRankTitle('getRank3Title', 'rank3Title');
    }

    /**
     * @covers ::setRank3Title
     * @test
     * @testdox setRank3Titleはプロパティrank3Titleに引数の値をセットする
     */
    public function testSetRank3Title(): void
    {
        $this->baseTestSetRankTitle('setRank3Title', 'rank3Title');
    }

    /**
     * @covers ::getRank4Title
     * @test
     * @testdox getRank4Titleはプロパティrank4Titleの値を返す
     */
    public function testGetRank4Title(): void
    {
        $this->baseTestGetRankTitle('getRank4Title', 'rank4Title');
    }

    /**
     * @covers ::setRank4Title
     * @test
     * @testdox setRank4Titleはプロパティrank4Titleに引数の値をセットする
     */
    public function testSetRank4Title(): void
    {
        $this->baseTestSetRankTitle('setRank4Title', 'rank4Title');
    }

    /**
     * @covers ::getRank5Title
     * @test
     * @testdox getRank5Titleはプロパティrank5Titleの値を返す
     */
    public function testGetRank5Title(): void
    {
        $this->baseTestGetRankTitle('getRank5Title', 'rank5Title');
    }

    /**
     * @covers ::setRank5Title
     * @test
     * @testdox setRank5Titleはプロパティrank5Titleに引数の値をセットする
     */
    public function testSetRank5Title(): void
    {
        $this->baseTestSetRankTitle('setRank5Title', 'rank5Title');
    }
}
